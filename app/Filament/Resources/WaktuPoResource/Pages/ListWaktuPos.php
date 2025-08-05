<?php

namespace App\Filament\Resources\WaktuPoResource\Pages;

use App\Filament\Resources\WaktuPoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWaktuPos extends ListRecords
{
    protected static string $resource = WaktuPoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
