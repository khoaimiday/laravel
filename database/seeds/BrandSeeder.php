<?php

use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            [
                'brand_name' =>  'Fugaka',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand_name' =>  'Trường Sơn',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand_name' =>  'VICHY',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand_name' =>  'Colgate',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand_name' =>  'Bepanthen',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand_name' =>  'Opodis Pharma',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

