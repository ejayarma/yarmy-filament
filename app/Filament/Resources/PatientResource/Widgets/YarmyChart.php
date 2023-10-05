<?php

namespace App\Filament\Resources\PatientResource\Widgets;

use Filament\Widgets\ChartWidget;

class YarmyChart extends ChartWidget
{
    protected static ?string $heading = 'Chart';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Treatments',
                    'data' => [12, 212, 34, 233, 49, 38],
                ]
            ],

            'labels' => ['skdjf', 'lskdjfk', '9kisd', 'i93i', '8kejf', 'lkji'],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
