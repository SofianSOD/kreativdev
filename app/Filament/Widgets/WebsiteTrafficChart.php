<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class WebsiteTrafficChart extends ChartWidget
{
    protected static ?string $heading = 'Website Visitors';

    protected function getData(): array
    {
        $data = \App\Models\DailyVisit::where('type', 'home')
            ->where('date', '>=', now()->subDays(30))
            ->orderBy('date')
            ->get();

        return [
            'datasets' => [
                [
                    'label' => 'Website Visitors',
                    'data' => $data->map(fn($row) => $row->count),
                    'borderColor' => '#3b82f6',
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
