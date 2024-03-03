<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() 
    {
        DB::table('countries')->insert([
            [
                'name' => 'Thailand',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Japan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'USA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Brazil',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'England',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
