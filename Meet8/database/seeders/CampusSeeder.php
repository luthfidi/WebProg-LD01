<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CampusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $datas = [
            [
                'name' => 'kemanggisan',
                'photo' => 'kemanggisan.jpg',
                'location' => 'kebon jeruk raya',
            ],
            [
                'name' => 'malang',
                'photo' => 'malang.jpg',
                'location' => 'Jalan raya malang',
            ],
            [
                'name' => 'bandung',
                'photo' => 'bandung.jpg',
                'location' => 'Jalan raya bandung',
            ],

        ];

        DB::table('campuses')->insert($datas);
    }
}
