<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        $authors = [
            [
                'name' => 'Masashi Kishimoto',
                'photo' => 'images/authors/1.webp',
                'birth_date' => '1974-11-08'
            ],
            [
                'name' => 'Gosho Aoyama',
                'photo' => 'images/authors/2.webp',
                'birth_date' => '1963-06-21'
            ],
            [
                'name' => 'Tsugumi Ohba',
                'photo' => 'images/authors/3.jpg',
                'birth_date' => '1960-02-15'
            ],
        ];
        DB::table('authors')->insert($authors);
    }
}
