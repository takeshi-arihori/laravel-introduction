<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // truncate
        // DB::table('people')->truncate();

        // param
        $param = [
            [
                'name' => 'taro',
                'mail' => 'taro@yamada',
                'age'  => 12,
            ],
            [
                'name' => 'hanako',
                'mail' => 'hanako@flower',
                'age'  => 34,
            ],
            [
                'name' => 'sachiko',
                'mail' => 'sachiko@happy',
                'age'  => 56,
            ],
        ];

        DB::table('people')->insert($param);
    }
}
