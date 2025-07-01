<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Genre;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use App\Filament\Resources\GenreResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\GenreResource\Pages\EditGenre;
use App\Filament\Resources\GenreResource\Pages\ListGenres;
use App\Filament\Resources\GenreResource\RelationManagers;
use App\Filament\Resources\GenreResource\Pages\CreateGenre;

class GenreResource extends Resource
{
    protected static ?string $model = Genre::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Content';
    protected static ?string $navigationLabel = 'Genres';
    protected static ?int $navigationSort = 3;
    public static function getNavigationBadge(): ?string
    {
        return (string) Genre::count();
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema(components: [
                TextInput::make(name: 'name')
                    ->required()
                    ->debounce(delay: 500)
                    ->afterStateUpdated(
                        callback: function (Forms\Set $set, string $state): void {
                            $set('slug', str(string: $state)->slug());
                            $set('name', str(string: $state)->title());
                        }
                    )
                    ->maxLength(length: 255),
                TextInput::make(name: 'slug')
                    ->disabledOn(operations: 'create')
                    ->required()
                    ->maxLength(length: 255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns(components: [
                TextColumn::make(name: 'name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make(name: 'slug')
                    ->searchable(),
                TextColumn::make(name: 'created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make(name: 'updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort(
                column: 'name',
                direction: 'asc'
            )
            ->filters(filters: [
                //
            ])
            ->actions(actions: [
                EditAction::make(),
            ])
            ->bulkActions(actions: [
                BulkActionGroup::make(actions: [
                    DeleteBulkAction::make(),
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
            'index' => Pages\ListGenres::route('/'),
            'create' => Pages\CreateGenre::route('/create'),
            'edit' => Pages\EditGenre::route('/{record}/edit'),
        ];
    }
}
