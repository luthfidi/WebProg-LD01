<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies = [
            [
                'genre_id' => '3',
                'title' => 'Doraemon',
                'photo' => 'images/Doraemon.jpg',
                'publish_date' => '1969-12-01',
                'description' => 'A robotic cat from the 22nd century helps a young boy named Nobita with his daily problems using futuristic gadgets.'
            ],
            [
                'genre_id' => '3',
                'title' => 'Bluey',
                'photo' => 'images/Bluey.jpg',
                'publish_date' => '2018-10-01',
                'description' => 'An Australian Blue Heeler puppy lives with her family and turns everyday family life into extraordinary adventures.'
            ],
            [
                'genre_id' => '3',
                'title' => 'Elemental',
                'photo' => 'images/Elemental.jpg',
                'publish_date' => '2023-06-16',
                'description' => 'In Element City, fire, water, land, and air residents live together until a fiery young woman and a go-with-the-flow guy discover something elemental.'
            ],
            [
                'genre_id' => '2',
                'title' => 'Spiderman',
                'photo' => 'images/Spiderman.jpg',
                'publish_date' => '2002-05-03',
                'description' => 'After being bitten by a genetically modified spider, Peter Parker gains supernatural powers and becomes Spider-Man to fight crime in New York City.'
            ],
            [
                'genre_id' => '1',
                'title' => 'Your Name.',
                'photo' => 'images/Your Name.jpg',
                'publish_date' => '2016-08-26',
                'description' => 'Two teenagers share a profound connection when they discover they can swap bodies. But a space-time anomaly will change their lives forever.'
            ],
            [
                'genre_id' => '2',
                'title' => 'Naruto',
                'photo' => 'images/Naruto.jpg',
                'publish_date' => '2002-10-03',
                'description' => 'Young ninja Naruto Uzumaki seeks recognition from his peers and dreams of becoming the Hokage, the leader of his village.'
            ]
        ];
        
        DB::table('movies')->insert($movies);
        
    }
}
