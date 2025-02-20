<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UsersSeeder::class, 
            EventSeeder::class,

            // $events = Event::inRandomOrder()->limit(3)->get(),
            // // dd($events),

            // User::all()->each(function ($user) use ($events) { 
            //     $user->events()->attach(
            //         $events->random(rand(1, 3))->pluck('id')->toArray()
            //     );
            // }),
        ]);
    }
}