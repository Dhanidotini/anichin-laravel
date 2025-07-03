<?php

namespace App\Filament\Widgets;

use App\Models\Series;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class SeriesStatsWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Series', Series::count())
                ->description('All anime series')
                ->color('success'),
            Stat::make('Total Episodes', Series::withCount('episodes')->get()->sum('episodes_count'))
                ->description('Across all series')
                ->color('warning'),
            Stat::make('Avg Episodes', number_format(Series::withCount('episodes')->get()->avg('episodes_count'), 1))
                ->description('Per series average')
                ->color('primary'),
        ];
    }
}
