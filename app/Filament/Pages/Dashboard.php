<?php

namespace App\Filament\Pages;

use App\Models\Order;
use Filament\Pages\Page;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';
    protected static string $view = 'filament.pages.dashboard';

    // Hitung total yang sudah dibayar (paid)
    public function getTotalPaid(): int
    {
        return (int) Order::where('payment_status', 'paid')->sum('grand_total');
    }
    
    public function getTotalPending(): int
    {
        return (int) Order::where('payment_status', 'pending')->sum('grand_total');
    }
    
    public function getPaidByMethod(): array
    {
        return Order::where('payment_status', 'paid')
            ->selectRaw('payment_method, SUM(grand_total) as total')
            ->groupBy('payment_method')
            ->pluck('total', 'payment_method')
            ->toArray();
    }
    }
