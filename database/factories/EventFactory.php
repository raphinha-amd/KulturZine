<?php

namespace Database\Factories;

use App\Models\EventCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startDate = $this->faker->dateTimeBetween('now', '+2 months');
        $endDate = (clone $startDate)->modify('+' . $this->faker->numberBetween(1, 3) . ' days');
        $isVolunteerActive = $this->faker->boolean(70);

        return [
            'event_category_id' => EventCategory::factory(),
            'name_event' => $this->faker->sentence(3),
            'featured_image' => 'https://placehold.co/600x400',
            'slug' => $this->faker->unique()->slug(),
            'location' => $this->faker->city() . ', ' . $this->faker->country(),
            'description' => $this->faker->paragraph(),
            'start_date' => $startDate,
            'end_date' => $endDate,
            'volunteer_link' => $isVolunteerActive ? $this->faker->url() : null,
            'is_volunteer_active' => $isVolunteerActive,
            'is_active' => $this->faker->boolean(80),
        ];
    }
}
