<?php

namespace Database\Seeders;

use App\Models\city;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class citySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $n = [['جده'],["حضرموت"]];

        for ($i=0; $i < 2; $i++) {
            foreach ($n[$i] as  $na)  {
                city::create(['name'=>$na,"country_id"=>$i+1]);
            }
        }
    }
}
