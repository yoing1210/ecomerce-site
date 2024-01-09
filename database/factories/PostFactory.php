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
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(1,3)),
            'slug' =>  $this->faker->slug(),
            'price' => $this->faker->numberBetween(1000,100000),
            'body' => collect($this->faker->paragraphs(mt_rand(5,7)))
                    ->map(fn($p) => "<p>$p</p>")
                    ->implode(''),
            'category_id' => mt_rand(1,6),
            'user_id' => mt_rand(1,5)
        ];
}
}
