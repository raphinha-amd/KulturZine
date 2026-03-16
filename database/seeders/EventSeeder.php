<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\EventCategory;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Seed the application's event data.
     */
    public function run(): void
    {
        EventCategory::factory(8)
            ->create()
            ->each(function (EventCategory $category): void {
                Event::factory(random_int(2, 4))
                    ->create([
                        'event_category_id' => $category->id,
                    ])
                    ->each(function (Event $event): void {
                        $isVolunteerActive = (bool) random_int(0, 1);

                        $event->update([
                            'is_volunteer_active' => $isVolunteerActive,
                            'volunteer_link' => $isVolunteerActive
                                ? 'https://example.com/volunteer/' . $event->slug
                                : null,
                        ]);
                    });
            });
    }
}
