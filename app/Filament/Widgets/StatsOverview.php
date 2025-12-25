<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Pengguna', \App\Models\User::count())
                ->description('Registered users')
                ->descriptionIcon('heroicon-m-users')
                ->color('primary'),
            Stat::make('Total Portfolio', \App\Models\Portfolio::count())
                ->description('Published portfolios')
                ->descriptionIcon('heroicon-m-briefcase')
                ->color('success'),
            Stat::make('Total Blog Post', \App\Models\Post::count())
                ->description('Published posts')
                ->descriptionIcon('heroicon-m-document-text')
                ->color('info'),
            Stat::make('Total Services', \App\Models\Service::count())
                ->description('Active services')
                ->descriptionIcon('heroicon-m-wrench-screwdriver')
                ->color('warning'),
        ];
    }
}
