<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('provinces')->insert([
            [
                'name' => 'สุรินทร์',
                'region_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ลำปาง',
                'region_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'พะเยา',
                'region_id' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'กรุงเทพ',
                'region_id' => '4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ขอนแก่น',
                'region_id' => '5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
