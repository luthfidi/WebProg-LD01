<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $books = [
            [
                'name' => 'Naruto: Shadow Investigation',
                'photo' => 'images/books/1.webp',
                'description' => 'Naruto must solve a series of mysterious disappearances in Konoha while uncovering a deeper conspiracy.',
                'publish_date' => '2024-1-15',
                'author_id' => 1,
                'genre_id' => 2 // mystery
            ],
            [
                'name' => 'One Piece: Grand Line Mysteries',
                'photo' => 'images/books/2.webp',
                'description' => 'The Straw Hat crew investigates ancient poneglyphs and the mysterious void century.',
                'publish_date' => '2024-2-10',
                'author_id' => 2,
                'genre_id' => 2 // mystery
            ],
            [
                'name' => 'My Hero Academia: Battle Training',
                'photo' => 'images/books/3.webp',
                'description' => 'Class 1-A engages in intensive combat training to prepare for the upcoming villains.',
                'publish_date' => '2024-3-5',
                'author_id' => 3,
                'genre_id' => 1 // action
            ],
            [
                'name' => 'Detective Conan: The Phantom Killer',
                'photo' => 'images/books/4.webp',
                'description' => 'Conan investigates a series of murders where the bodies mysteriously disappear.',
                'publish_date' => '2024-4-20',
                'author_id' => 2,
                'genre_id' => 2 // mystery
            ],
            [
                'name' => 'Dragon Ball Super: Tournament of Power',
                'photo' => 'images/books/5.webp',
                'description' => 'Goku and his team battle against the strongest warriors from other universes.',
                'publish_date' => '2024-5-12',
                'author_id' => 3,
                'genre_id' => 1 // action
            ],
            [
                'name' => 'Death Note: The New Case',
                'photo' => 'images/books/6.webp',
                'description' => 'L investigates a new series of mysterious deaths that follow an impossible pattern.',
                'publish_date' => '2024-6-8',
                'author_id' => 1,
                'genre_id' => 2 // mystery
            ],
            [
                'name' => 'Demon Slayer: Mugen Train',
                'photo' => 'images/books/7.webp',
                'description' => 'Tanjiro and his companions face intense battles aboard a mysterious train.',
                'publish_date' => '2024-7-25',
                'author_id' => 2,
                'genre_id' => 1 // action
            ],
            [
                'name' => 'Attack on Titan: Warriors',
                'photo' => 'images/books/8.webp',
                'description' => 'Epic battles unfold as humanity fights against the invading Titans.',
                'publish_date' => '2024-8-30',
                'author_id' => 1,
                'genre_id' => 1 // action
            ],
            [
                'name' => 'The Promised Neverland: Secret of Grace Field',
                'photo' => 'images/books/9.webp',
                'description' => 'Children at an orphanage uncover dark secrets about their seemingly perfect home.',
                'publish_date' => '2024-9-15',
                'author_id' => 3,
                'genre_id' => 2 // mystery
            ],
        ];
        DB::table('books')->insert($books);
    }
}
