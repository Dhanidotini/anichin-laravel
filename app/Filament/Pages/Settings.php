<?php

namespace App\Filament\Pages;

use Closure;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Outerweb\FilamentSettings\Filament\Pages\Settings as BaseSettings;

class Settings extends BaseSettings
{
    public function schema(): array|Closure
    {
        return [
            Tabs::make('Settings')
                ->schema([
                    Tab::make('App Settings')
                        ->icon('heroicon-o-cog')
                        ->schema([
                            Grid::make('app_settings')
                                ->columns(2)
                                ->schema([
                                    TextInput::make('app.name')
                                        ->label('App Name')
                                        ->helperText('Set the name of the application.'),
                                    Toggle::make('app.visibility.name')
                                        ->label('App Name Visibility')
                                        ->helperText('Enable or disable the visibility of the app name.'),
                                    FileUpload::make('app.logo')
                                        ->disk('public')
                                        ->directory('app/logos')
                                        ->visibility('public')
                                        ->acceptedFileTypes(['image/*'])
                                        ->maxSize(1024) // 1MB
                                        ->label('App Logo')
                                        ->helperText('Upload the logo for the application.')
                                        ->image(),
                                    Toggle::make('app.visibility.logo')
                                        ->label('App Logo Visibility')
                                        ->helperText('Enable or disable the visibility of the app logo.'),
                                ]),
                            Textarea::make('app.description')
                                ->label('App Description')
                                ->helperText('Set the description for the application.')
                                ->required(),
                            Toggle::make('app.locale')
                                ->label('App Locale')
                                ->helperText('Set the default locale for the application.')
                                ->default(env('APP_LOCALE', 'en'))
                                ->required(),
                        ]),
                    Tab::make('Home Page Settings')
                        ->icon('heroicon-o-home')
                        ->schema([
                            Toggle::make('page_featured')
                                ->label('Featured Page')
                                ->helperText('Enable or disable the featured page.')
                                ->default(true)
                                ->required(),
                            Toggle::make('page_popular')
                                ->label('Popular Series')
                                ->helperText('Enable or disable the popular series section on the homepage.')
                                ->default(true)
                                ->required(),
                            Toggle::make('page_popular_today')
                                ->label('Today\'s Most Popular')
                                ->helperText('Enable or disable the "Today\'s Most Popular" section on the homepage.')
                                ->default(true)
                                ->required(),
                            Toggle::make('page_latest')
                                ->label('Latest Series')
                                ->helperText('Enable or disable the latest series section on the homepage.')
                                ->default(true)
                                ->required(),
                            Toggle::make('page_completed')
                                ->label('Completed Series')
                                ->helperText('Enable or disable the completed series section on the homepage.')
                                ->default(true)
                                ->required(),
                        ]),

                ])
        ];
    }
}
