<?php

namespace App\Filament\Resources;

use App\Models\Series;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Grid;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Enums\StatusSeries;
use Filament\Resources\Resource;
use Filament\Forms\Components\Field;
use Filament\Forms\Components\Split;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Forms\Components\DateTimePicker;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\RestoreBulkAction;
use Filament\Tables\Actions\ForceDeleteBulkAction;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SeriesResource\Pages\EditSeries;
use App\Filament\Resources\SeriesResource\Pages\ListSeries;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use App\Filament\Resources\SeriesResource\Pages\CreateSeries;
use App\Filament\Resources\SeriesResource\RelationManagers\EpisodesRelationManager;

class SeriesResource extends Resource
{
    protected static ?string $model = Series::class;

    protected static ?string $navigationIcon = 'heroicon-o-queue-list';

    public static function getNavigationBadge(): ?string
    {
        return (string) Series::count();
    }

    protected static ?string $navigationGroup = 'Content';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Split::make([
                    Grid::make()
                        ->columns(1)
                        ->schema([
                            Fieldset::make('Title Section')
                                ->columns(1)
                                ->schema([
                                    TextInput::make(name: 'title')
                                        ->required()
                                        ->markAsRequired(false)
                                        ->live(true)
                                        ->afterStateUpdated(fn(Set $set, string $state) => ($set('slug', str($state)->slug()))),
                                    TextInput::make(name: 'native_title')
                                        ->maxLength(length: 255),
                                    TextInput::make(name: 'english_title')
                                        ->maxLength(length: 255),
                                    TextInput::make(name: 'slug')
                                        ->disabledOn(operations: 'create'),
                                ]),
                            Textarea::make(name: 'description')
                                ->label('Description/Synopsis'),

                        ]),
                    Grid::make()
                        ->columns(1)
                        ->schema([
                            Section::make('Media Section')
                                ->columns(1)
                                ->collapsed()
                                ->schema([
                                    SpatieMediaLibraryFileUpload::make(name: 'cover_image')
                                        ->collection('cover_images')
                                        ->image()
                                        ->maxSize(1024) // 1MB
                                        ->acceptedFileTypes(['image/*'])
                                        ->label('Cover Image'),
                                    SpatieMediaLibraryFileUpload::make(name: 'banner_image')
                                        ->collection('banner_images')
                                        ->image()
                                        ->maxSize(2048) // 2MB
                                        ->acceptedFileTypes(['image/*'])
                                        ->label('Banner Image'),
                                ]),
                            Section::make('Information Section')
                                ->schema([
                                    Grid::make()
                                        ->columns(1)
                                        ->schema([
                                            Select::make(name: 'status')
                                                ->disablePlaceholderSelection()
                                                ->options(options: StatusSeries::class)
                                                ->default(state: StatusSeries::Unknown),
                                            Select::make(name: 'country_id')
                                                ->relationship('country', 'name')
                                                ->default(state: 'Japan')
                                                ->preload(),
                                            Select::make(name: 'genres')
                                                ->relationship(name: 'genres', titleAttribute: 'name')
                                                ->multiple()
                                                ->preload()
                                                ->searchable(),
                                            Select::make('studios')
                                                ->relationship('studios', 'name')
                                                ->multiple()
                                                ->preload()
                                                ->searchable(),
                                        ])
                                ]),
                            Section::make('Meta Information')
                                ->columns(1)
                                ->schema([
                                    Toggle::make(name: 'is_published'),
                                    Toggle::make(name: 'is_featured'),
                                    DateTimePicker::make(name: 'published_at')
                                ]),
                        ])
                        ->grow(false),
                ])
                    ->columns(2)
                    ->from('lg')
                    ->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->striped()
            ->columns([
                TextColumn::make('title')
                    ->searchable(),
                TextColumn::make('slug')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('description')
                    ->searchable()
                    ->limit(50),
                TextColumn::make('published_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                ToggleColumn::make('is_published')
                    ->label('Published')
                    ->toggleable(isToggledHiddenByDefault: true),
                ToggleColumn::make('is_featured')
                    ->label('Featured'),
            ])
            ->filters([
                TrashedFilter::make(),
            ], layout: FiltersLayout::Modal)
            ->actions([
                EditAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSeries::route('/'),
            'create' => CreateSeries::route('/create'),
            'edit' => EditSeries::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
