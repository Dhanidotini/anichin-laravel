<?php

namespace App\Filament\Resources\GenreResource\Pages;

use App\Filament\Resources\GenreResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateGenre extends CreateRecord
{
    protected static string $resource = GenreResource::class;
    public function mutateFormDataBeforeCreate(array $data): array
    {
        $data['slug'] = str($data['name'])->slug();
        return $data;
    }
}
