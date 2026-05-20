<?php

namespace Database\Factories;

use App\Models\GalleryTag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mediagallery>
 */
class MediagalleryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $galleryTag = GalleryTag::inRandomOrder()->limit(3)->pluck('name')->toArray();
        return [
            'mediaFile' => $this->faker->imageUrl(640, 480, 'Gallery', true, 'Faker'),
            'type' => "image/png",
            'tags' => json_encode($galleryTag), // Store multiple galleryTag IDs as JSON
            'status' => $this->faker->boolean,  // true/false for active/inactive status
        ];
    }
}
