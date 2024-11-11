<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Author extends Model
{
    //
    use HasFactory;

    protected $dates=['birth'];
    /**
     * Get the comments for the blog post.
     */
    public function books(): HasMany
    {
        return $this->hasMany(Book::class);
    }
    
    protected function casts(): array
    {
        return [
            'birth_date' => 'date:d F Y'
        ];
    }
}

