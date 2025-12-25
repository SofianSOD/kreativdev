<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class BlogTrafficChart extends ChartWidget
{
    protected static ?string $heading = 'Blog Viewers';

    protected function getData(): array
    {
        $data = \App\Models\DailyVisit::where('type', 'blog')
            ->where('date', '>=', now()->subDays(30))
            ->orderBy('date')
            ->get();

        return [
            'datasets' => [
                [
                    'label' => 'Blog Viewers',
                    'data' => $data->map(fn($row) => $row->count),
                    'borderColor' => '#10b981',
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
