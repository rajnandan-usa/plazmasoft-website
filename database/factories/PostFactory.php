<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        return [
            'category_id' => Category::inRandomOrder()->first()->id, // Select a random category
            'admin_id' => 1, // Assuming you have 3 admins
            'title' => $this->faker->sentence,
            'description' => $this->faker->text(200),
            'image' => $this->faker->imageUrl(640, 480, 'posts', true, 'Faker'),
            'content' => $this->faker->paragraphs(5, true),
            'status' => $this->faker->boolean,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
