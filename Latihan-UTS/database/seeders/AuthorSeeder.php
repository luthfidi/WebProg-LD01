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
                'photo' => 'image/authors/1.png',
                'birth-date' => '2000-1-20'
            ],
            [
                'name' => 'Author 2',
                'photo' => 'image/authors/2.png',
                'birth-date' => '2000-2-20'
            ],
            [
                'name' => 'Author 3',
                'photo' => 'image/authors/3.png',
                'birth-date' => '2000-3-20'
            ],
        ];
 
        DB::table('authors')->insert($authors);
    }
}
