<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    //
    use HasFactory;
    /**
     * Get the comments for the blog post.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany;     
     */
    
    public function genre(): BelongsTo
    {
        return $this->belongsTo(Genre::class);
    }

    public function author(): BelongsTo

    {
        return $this->belongsTo(Author::class);
    }
}
