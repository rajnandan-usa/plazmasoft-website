<?php

namespace Database\Seeders;

use App\Models\Mediagallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MediagallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mediagallery::factory(50)->create();
    }
}
