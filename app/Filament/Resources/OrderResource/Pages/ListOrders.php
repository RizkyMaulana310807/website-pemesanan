<?php

namespace App\Filament\Resources\OrderResource\Pages;

use App\Filament\Resources\OrderResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListOrders extends ListRecords
{
    protected static string $resource = OrderResource::class;

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

            'delivered' => Tab::make()
                ->label('Sudah Diterima')
                ->modifyQueryUsing(fn(Builder $query) => $query->where('status', 'delivered')),

            'payment_pending' => Tab::make()
                ->label('Pembayaran Pending')
                ->modifyQueryUsing(fn(Builder $query) => $query->where('payment_status', 'pending')),

            'paid' => Tab::make()
                ->label('Sudah Dibayar')
                ->modifyQueryUsing(fn(Builder $query) => $query->where('payment_status', 'paid')),
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
