<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\IconColumn;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->label('Nama Produk'),

                Textarea::make('description')
                    ->required()
                    ->label('Deskripsi'),

                TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('Rp')
                    ->label('Harga'),

                TextInput::make('img_path')
                    ->required()
                    ->maxLength(255)
                    ->label('Path Gambar (contoh: images/applefritters.png)'),

                DateTimePicker::make('unlocked_at')
                    ->label('Tersedia Mulai Tanggal'),

                DateTimePicker::make('locked_at')
                    ->label('Tersedia Sampai Tanggal'),

                Toggle::make('is_special')
                    ->required()
                    ->label('Menu Spesial?'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('img_path')
                    ->label('Gambar')
                    ->getStateUsing(fn($record) => asset($record->img_path))
                    ->height(60)
                    ->width(60),

                TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->label('Nama Produk'),

                TextColumn::make('price')
                    ->money('IDR')
                    ->sortable()
                    ->label('Harga'),

                TextColumn::make('unlocked_at')
                    ->dateTime()
                    ->sortable()
                    ->label('Tersedia Mulai'),

                TextColumn::make('locked_at')
                    ->dateTime()
                    ->sortable()
                    ->label('Tersedia Sampai'),

                IconColumn::make('is_special')
                    ->boolean()
                    ->label('Spesial'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
