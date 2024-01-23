<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use Spatie\Permission\Contracts\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
                        countryseeder::class,

             citySeeder::class,
            UserSeeder::class,

            // citySeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // Role::insert([['name' => 'Admin'], ['name' => 'Manager']]);
        // Permission::insert(
        //     [
        //         ['name' => 'show-products-list'],
        //         ['name' => 'show-product'],
        //         ['name' => 'create-product'],
        //         ['name' => 'update-product'],
        //         ['name' => 'delete-product'],

        //     ]
        //     );

        // Role::whereName('Admin')->first()->givePermissionTo(
        //     [
        //        'show-products-list',
        //        'show-product',
        //        'create-product',
        //        'update-product',
        //        'delete-product',
        //     ]
        // );

        // Role::whereName('Manager')->first()->givePermissionTo(
        //     [
        //        'show-products-list',
        //        'show-product'
        //     ]
        // );
    }
}
