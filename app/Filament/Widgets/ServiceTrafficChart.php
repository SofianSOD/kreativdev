<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class ServiceTrafficChart extends ChartWidget
{
    protected static ?string $heading = 'Service Viewers';

    protected function getData(): array
    {
        $data = \App\Models\DailyVisit::where('type', 'service')
            ->where('date', '>=', now()->subDays(30))
            ->orderBy('date')
            ->get();

        return [
            'datasets' => [
                [
                    'label' => 'Service Viewers',
                    'data' => $data->map(fn($row) => $row->count),
                    'borderColor' => '#f59e0b',
                ],
            ],
            'labels' => $data->map(fn($row) => $row->date),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
