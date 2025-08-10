<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Models\Order;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Placeholder;
use Illuminate\Support\HtmlString;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Detail Pesanan')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('customer_name')
                                    ->label('Nama Pelanggan')
                                    ->disabledOn('view'),
                                TextInput::make('customer_phone')
                                    ->label('No. HP')
                                    ->disabledOn('view'),
                                TextInput::make('invoice_id')
                                    ->label('Invoice ID')
                                    ->disabled()
                                    ->hidden(fn($livewire) => $livewire instanceof \Filament\Resources\Pages\EditRecord),
                                TextInput::make('grand_total')
                                    ->numeric()
                                    ->prefix('Rp')
                                    ->label('Total Bayar')
                                    ->disabledOn('view'),
                                Select::make('status')
                                    ->label('Status Pesanan')
                                    ->options([
                                        'pending' => 'Pending',
                                        'delivery' => 'Dalam Pengiriman',
                                        'delivered' => 'Sudah Diterima',
                                        'selesai' => 'Selesai',  // Kalau masih ada status ini
                                    ])
                                    ->required(),

                                Select::make('payment_status')
                                    ->label('Status Pembayaran')
                                    ->options([
                                        'pending' => 'Pending',
                                        'paid' => 'Paid',
                                    ])
                                    ->required(),

                                Select::make('payment_method')
                                    ->options([
                                        'cash' => 'Cash',
                                        'qris' => 'QRIS',
                                    ])
                                    ->label('Metode Pembayaran')
                                    ->disabledOn('view'),
                                DatePicker::make('pickup_date')
                                    ->label('Tanggal Ambil')
                                    ->displayFormat('d M Y')
                                    ->disabledOn('view'),
                            ]),
                    ]),

                Section::make('Item yang Dipesan')
                    ->schema([
                        Placeholder::make('ordered_items')
                            ->label('')
                            ->content(function (?Order $record): HtmlString {
                                if (!$record || !$record->products->count()) {
                                    return new HtmlString('Tidak ada item yang dipesan.');
                                }

                                $table = '<table style="width: 100%; border-collapse: collapse;">';
                                $table .= '<thead><tr style="background-color: #0004;"><th style="padding: 8px; border: 1px solid #e5e7eb; text-align: left;">Produk</th><th style="padding: 8px; border: 1px solid #e5e7eb; text-align: center;">Jumlah</th><th style="padding: 8px; border: 1px solid #e5e7eb; text-align: right;">Harga Satuan</th></tr></thead>';
                                $table .= '<tbody>';

                                foreach ($record->products as $product) {
                                    $table .= '<tr>';
                                    $table .= '<td style="padding: 8px; border: 1px solid #e5e7eb;">' . e($product->name) . '</td>';
                                    $table .= '<td style="padding: 8px; border: 1px solid #e5e7eb; text-align: center;">' . e($product->pivot->quantity) . '</td>';
                                    $table .= '<td style="padding: 8px; border: 1px solid #e5e7eb; text-align: right;">Rp' . number_format($product->pivot->price_at_purchase, 0, ',', '.') . '</td>';
                                    $table .= '</tr>';
                                }

                                $table .= '</tbody></table>';

                                return new HtmlString($table);
                            }),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('customer_name')->searchable()->label('Nama Pelanggan'),
                TextColumn::make('invoice_id')->searchable()->label('No. Invoice'),
                TextColumn::make('grand_total')->money('IDR')->sortable()->label('Total Bayar'),

                BadgeColumn::make('status')
                    ->colors([
                        'warning' => 'pending',
                        'primary' => 'delivery',
                        'success' => 'delivered',
                    ])
                    ->label('Status Pesanan'),
                BadgeColumn::make('payment_status')
                    ->label('Status Pembayaran')
                    ->colors([
                        'warning' => 'pending',
                        'success' => 'paid',
                    ]),

                TextColumn::make('payment_method')->badge()->label('Pembayaran'),
                TextColumn::make('created_at')->dateTime()->label('Tgl Pesan'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),

                Tables\Actions\Action::make('Selesaikan')
                    ->action(function (Order $record) {
                        if ($record->status === 'pending') {
                            $record->update(['status' => 'delivery']);
                        } elseif ($record->status === 'delivery') {
                            $record->update(['status' => 'delivered']);
                        }
                    })
                    ->requiresConfirmation()
                    ->color(fn(Order $record) => match ($record->status) {
                        'pending' => 'success',
                        'delivery' => 'primary',
                        default => 'secondary',
                    })
                    ->icon(fn(Order $record) => match ($record->status) {
                        'pending' => 'heroicon-o-truck',
                        'delivery' => 'heroicon-o-check-circle',
                        default => 'heroicon-o-ban',
                    })
                    ->label(fn(Order $record) => match ($record->status) {
                        'pending' => 'Dalam Pengiriman',
                        'delivery' => 'Sudah Diterima',
                        default => 'Selesai',
                    })
                    ->visible(fn(Order $record): bool => in_array($record->status, ['pending', 'delivery'])),
            ])
            ->bulkActions([
                //
            ]);
    }

    public function getTabs(): array
    {
        return [
            'semua' => Tab::make()->label('Semua'),
            'pending' => Tab::make()
                ->label('Pending')
                ->modifyQueryUsing(fn(Builder $query) => $query->where('status', 'pending')),
            'delivery' => Tab::make()
                ->label('Dalam Pengiriman')
                ->modifyQueryUsing(fn(Builder $query) => $query->where('status', 'delivery')),
            'paid' => Tab::make()
                ->label('Paid')
                ->modifyQueryUsing(fn(Builder $query) => $query->where('payment_status', 'paid')),
        ];
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            'view' => Pages\ViewOrder::route('/{record}'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),
        ];
    }
}
