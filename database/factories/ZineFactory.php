<?php

namespace Database\Factories;

use App\Models\ZineCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Zine>
 */
class ZineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'zine_category_id' => ZineCategory::factory(),
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'featured_image' => 'https://placehold.co/800x1200?text=Zine',
            'author' => $this->faker->name(),
            'link_pdf' => $this->faker->url() . '.pdf',
        ];
    }
}
