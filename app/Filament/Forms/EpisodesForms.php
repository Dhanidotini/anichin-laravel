<?php

namespace App\Filament\Forms;

use Illuminate\Support\Carbon;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DateTimePicker;

class EpisodesForms
{
    public static function schema(bool $hasModel = false): array
    {
        return [
            TextInput::make('title')
                ->required(),
            TextInput::make('number'),
            Textarea::make('url_video')
                ->columnSpanFull(),
            TextInput::make('duration')
                ->numeric(),
            Toggle::make('is_published')
                ->live(),
            DateTimePicker::make('published_at')
                ->default(now())
                ->hidden(fn($get) => !$get('is_published')),
            Select::make('series_id')
                ->hidden(!$hasModel)
                ->relationship('series', 'name')
                ->required(),
        ];
    }
    public static function createForm(): array
    {
        return (new self())->schema(true);
    }
}
