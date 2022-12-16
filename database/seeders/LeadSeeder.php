<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LeadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 100; $i++) {
            DB::table('leads')->insert([
                'lead_id' => 'L'.$i,
                'uuid' => (string) Str::orderedUuid(),
                'status' => rand(1, 3),
                'seller_motivation' => rand(1, 14),
                'selling_timeframe' => rand(1, 5),
                'exterior_cond' => rand(1, 3),
                'kitchen_cond' => rand(1, 3),
                'bathroom_cond' => rand(1, 3),
                'yard_cond' => rand(1, 4),
                'clearance_price' => (rand(1, 3) > 2) ? rand(90, 120) : null,
                'mortgage' => rand(1, 3),
                'house_type' => rand(1, 5),
                'constructed_year' => (string) rand(1980, 2022),
                'square_footage' => rand(50, 3000),
                'bedroom' => rand(1, 10),
                'bathroom' => rand(1, 10),
                'county_id' => rand(1, 15000),
                'created_at' => (string) Date::now(),
                'updated_at' => (string) Date::now(),
            ]);
        }
    }
}
