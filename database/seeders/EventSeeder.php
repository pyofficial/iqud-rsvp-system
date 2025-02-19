<?php

namespace Database\Seeders;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
            ['name' => 'Summer BBQ', 'date' => Carbon::now()->addDays(7)],
            ['name' => 'Tech Conference', 'date' => Carbon::now()->addDays(30)],
            ['name' => 'Charity Run', 'date' => Carbon::now()->addDays(14)],
            ['name' => 'Music Festival', 'date' => Carbon::now()->addDays(45)],
            ['name' => 'Art Exhibition', 'date' => Carbon::now()->addDays(60)],
            ['name' => 'Book Signing', 'date' => Carbon::now()->addDays(21)],
            ['name' => 'Networking Night', 'date' => Carbon::now()->addDays(10)],
            ['name' => 'Movie Premiere', 'date' => Carbon::now()->addDays(8)],
            ['name' => 'Cooking Class', 'date' => Carbon::now()->addDays(35)],
            ['name' => 'Yoga Retreat', 'date' => Carbon::now()->addDays(50)],
        ];

        foreach ($events as $event) {
            Event::create($event);
        }
    }
}
