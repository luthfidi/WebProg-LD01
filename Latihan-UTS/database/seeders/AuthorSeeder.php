<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $authors = [
            [
                'name' => 'Author 1',
                'photo' => 'images/authors/1.png',
                'birth_date' => '2000-1-20'
            ],
            [
                'name' => 'Author 2',
                'photo' => 'images/authors/2.png',
                'birth_date' => '2000-2-20'
            ],
            [
                'name' => 'Author 3',
                'photo' => 'images/authors/3.png',
                'birth_date' => '2000-3-20'
            ],
        ];
        DB::table('authors')->insert($authors);
    }
}
