<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $books = [
            [
                'name' => 'book 1',
                'photo' => 'images/books/1.png',
                'description' => 'description book 1',
                'publish_date' => '2024-1-1',
                'author_id' => 1,
                'genre_id' => 1
            ],
            [
                'name' => 'book 2',
                'photo' => 'images/books/2.png',
                'description' => 'description book 2',
                'publish_date' => '2024-2-1',
                'author_id' => 1,
                'genre_id' => 1
            ],
            [
                'name' => 'book 3',
                'photo' => 'images/books/3.png',
                'description' => 'description book 3',
                'publish_date' => '2024-3-1',
                'author_id' => 2,
                'genre_id' => 2
            ],
            [
                'name' => 'book 4',
                'photo' => 'images/books/4.png',
                'description' => 'description book 4',
                'publish_date' => '2024-4-1',
                'author_id' => 3,
                'genre_id' => 1
            ],
            [
                'name' => 'book 5',
                'photo' => 'images/books/5.png',
                'description' => 'description book 5',
                'publish_date' => '2024-5-1',
                'author_id' => 3,
                'genre_id' => 1
            ],
            [
                'name' => 'book 6',
                'photo' => 'images/books/6.png',
                'description' => 'description book 6',
                'publish_date' => '2024-6-1',
                'author_id' => 2,
                'genre_id' => 2
            ],
            [
                'name' => 'book 7',
                'photo' => 'images/books/7.png',
                'description' => 'description book 7',
                'publish_date' => '2024-7-1',
                'author_id' => 1,
                'genre_id' => 1
            ],
            [
                'name' => 'book 8',
                'photo' => 'images/books/8.png',
                'description' => 'description book 8',
                'publish_date' => '2024-8-1',
                'author_id' => 2,
                'genre_id' => 2
            ],
            [
                'name' => 'book 9',
                'photo' => 'images/books/9.png',
                'description' => 'description book 9',
                'publish_date' => '2024-9-1',
                'author_id' => 3,
                'genre_id' => 2
            ],
        ];
        DB::table('books')->insert($books);
    }
}
