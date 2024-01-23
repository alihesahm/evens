<?php

namespace Database\Seeders;

use App\Models\country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class countryseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $country = ['السعوديه','اليمن'];
        foreach ($country as $country) {
            $c = new country();
            $c->name=$country;
            $c->save();
        }
    }
}
