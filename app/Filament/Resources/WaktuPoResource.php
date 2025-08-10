<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WaktuPoResource\Pages;
use App\Filament\Resources\WaktuPoResource\RelationManagers;
use App\Models\WaktuPo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;

class WaktuPoResource extends Resource
{
    protected static ?string $model = WaktuPo::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_po')
                    ->label('Nama PO')
                    ->required(),

                DatePicker::make('open_po')
                    ->label('Tanggal Buka PO')
                    ->required(),

                DatePicker::make('close_po')
                    ->label('Tanggal Tutup PO')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_po')->label('Nama PO')->searchable()->sortable(),
                TextColumn::make('open_po')->label('Tanggal Buka PO')->date()->sortable(),
                TextColumn::make('close_po')->label('Tanggal Tutup PO')->date()->sortable(),
                TextColumn::make('created_at')->label('Dibuat')->dateTime()->sortable(),
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
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListWaktuPos::route('/'),
            'create' => Pages\CreateWaktuPo::route('/create'),
            'edit' => Pages\EditWaktuPo::route('/{record}/edit'),
        ];
    }
}
