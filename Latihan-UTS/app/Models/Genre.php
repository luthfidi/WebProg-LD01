<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Genre extends Model
{
    //
    use HasFactory;
    /**
     * Get the comments for the blog post.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany;     
     */
    public function books(): HasMany
    {
        return $this->hasMany(Book::class);
    }
}
