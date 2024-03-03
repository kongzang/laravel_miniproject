<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('phones')->insert([
            [
                'name' => '4154354435145',
                'country_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '135414555',
                'country_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '15045431',
                'country_id' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '145153453453',
                'country_id' => '4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '1477745555',
                'country_id' => '5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
