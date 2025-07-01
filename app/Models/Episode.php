<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Episode extends Model
{
    use SoftDeletes;
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];
    protected $casts = [
        'is_published' => 'boolean',
        'published_at' => 'datetime',
        'duration' => 'integer',
    ];
    public function series(): BelongsTo
    {
        return $this->belongsTo(Series::class);
    }
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
