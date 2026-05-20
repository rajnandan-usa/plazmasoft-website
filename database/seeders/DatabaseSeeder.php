<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(100)->create();

        // User::factory()->create([
        //     'name' => 'Example User',
        //     'email' => 'user@example.com',
        // ]);


        Admin::factory()->create([
            'name' => 'Example Admin',
            'role' => 'super',
            'email' => 'plazmasoft@plazmasoft.com',
            'password' => 'password',
            'status' => true
        ]);


        $this->call(
            [
                // GalleryTagSeeder::class,
                // MediagallerySeeder::class,
                // CategorySeeder::class,
                // PostSeeder::class
                SettingsSeeder::class
            ]
        );
    }
}
