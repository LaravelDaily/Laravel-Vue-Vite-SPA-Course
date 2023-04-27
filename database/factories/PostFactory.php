<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    public function definition(): array
    {
        $categories = Category::pluck('id');

        return [
            'title'       => $this->faker->word(),
            'content'     => $this->faker->paragraphs(asText: true),
            'category_id' => $categories->random(),
        ];
    }
}
