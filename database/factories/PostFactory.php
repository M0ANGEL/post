<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $published = $this->faker->randomElement([true,false]);
        $published_at = $published ? now() : null;
        return [
            'title'=>$this->faker->sentence(),
            'body'=>$this->faker->text(2000),
            'image_path'=>$this->faker->imageUrl(1280, 720),
            'published'=>$published,
            'published_at'=>$published_at,
            'category_id'=> rand(1,10),
            'user_id'=>rand(1,20)
        ];
    }
}
