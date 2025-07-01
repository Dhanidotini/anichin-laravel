<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Studio extends Model
{
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];
    protected $fillable = [
        'name',
        'slug',
    ];
    public function getRouteKeyName(): string
    {
        return 'slug';
    }
    public function series(): BelongsToMany
    {
        return $this->belongsToMany(Series::class, 'series_studio');
    }
}
