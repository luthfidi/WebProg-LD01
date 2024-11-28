<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'genre_id',
        'title',
        'photo',
        'description',
        'publish_date'
    ];

    protected $dates = ['publish_date'];

    protected function casts(): array
    {
        return [
            'publish_date' => 'date:d-m-Y',
        ];
    }

    public function genre(): BelongsTo
    {
        return $this->belongsTo(Genre::class, 'genre_id');
    }
}
