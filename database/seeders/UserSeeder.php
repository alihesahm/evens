<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(40)->create();
        User::factory(10)->state(['role_id'=>1])->create();
        User::factory(10)->state(['role_id'=>2])->create();
    }
}
