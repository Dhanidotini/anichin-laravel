<?php

namespace App\Filament\Resources\SeriesResource\Pages;

use Filament\Forms\Get;
use Filament\Forms\Set;
use Illuminate\Support\Str;
use App\Filament\Resources\SeriesResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSeries extends CreateRecord
{
    protected static string $resource = SeriesResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['slug'] = Str::slug($data['title']);
        $data['author_id'] = auth()->user()->id;

        if ($data['is_published']) {
            $data['published_at'] = now();
        } else {
            $data['published_at'] = null;
        }

        return $data;
    }
}
