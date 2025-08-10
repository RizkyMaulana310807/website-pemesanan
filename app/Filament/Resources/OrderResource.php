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
                        'success' => 'selesai',
                    ])
                    ->label('Status Pesanan'),

                TextColumn::make('payment_method')->badge()->label('Pembayaran'),
                TextColumn::make('created_at')->dateTime()->label('Tgl Pesan'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),

                Tables\Actions\Action::make('Selesaikan')
                    ->action(fn(Order $record) => $record->update(['status' => 'selesai']))
                    ->requiresConfirmation()
                    ->color('success')
                    ->icon('heroicon-o-check-circle')
                    ->visible(fn(Order $record): bool => $record->status === 'pending'),
            ])
            ->bulkActions([
                //
            ]);
    }

    public function getTabs(): array
    {
        return [
            'semua' => Tab::make(),
            'pending' => Tab::make()
                ->modifyQueryUsing(fn(Builder $query) => $query->where('status', 'pending')),
            'selesai' => Tab::make()
                ->modifyQueryUsing(fn(Builder $query) => $query->where('status', 'selesai')),
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
