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
        $param = [
            'name' =>'kazu',
            'mail' => 'kazu@gmail.com',
            'age' => 19,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'hirahira',
            'mail' => 'hirahira@gmail.com',
            'age' => 19,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'dukken',
            'mail' => 'dukken@gmail.com',
            'age' => 19,
        ];
        DB::table('people')->insert($param);


    }
}
