<?php

namespace App\Models;

use App\Enums\StatusSeries;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Series extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];
    protected $casts = [
        'status' => StatusSeries::class,
        'is_published' => 'boolean',
        'is_featured' => 'boolean',
        'published_at' => 'datetime',
    ];
    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('posters')
            ->addMediaCollection('posters')
            ->queue();
    }
    public function episodes(): HasMany
    {
        return $this->hasMany(Episode::class);
    }
    public function studios(): BelongsToMany
    {
        return $this->belongsToMany(Studio::class, 'series_studios');
    }
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function genres(): BelongsToMany
    {
        return $this->belongsToMany(related: Genre::class, table: 'series_genres');
    }
    public function country(): BelongsTo
    {
        return $this->belongsTo(related: Country::class);
    }
}
