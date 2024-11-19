<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $datas = [
            [
                'nim' => '1',
                'name' => 'student 1 kemanggisan',
                'photo' => '1.png',
                'campus_id'=>1
            ],
            [
                'nim' => '2',
                'name' => 'student 2',
                'photo' => '2.png',
                'campus_id'=>1
            ],
            [
                'nim' => '3',
                'name' => 'student 3',
                'photo' => '3.png',
                'campus_id'=>1
            ],
            [
                'nim' => '4',
                'name' => 'student 4',
                'photo' => '3.png',
                'campus_id'=>1
            ],
            [
                'nim' => '5',
                'name' => 'student 5',
                'photo' => '3.png',
                'campus_id'=>1
            ],
            [
                'nim' => '6',
                'name' => 'student 6',
                'photo' => '3.png',
                'campus_id'=>2
            ],
            [
                'nim' => '5',
                'name' => 'student 5',
                'photo' => '5.png',
                'campus_id'=>3
            ],
            [
                'nim' => '6',
                'name' => 'student 6',
                'photo' => '6.png',
                'campus_id'=>3
            ],
        ];

        DB::table('students')->insert($datas);
    }
}
