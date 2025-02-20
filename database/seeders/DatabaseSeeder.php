<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $password = '123456';
        $users = [
            ['email' => 'demouser1@example.com', 'first_name' => 'User', 'last_name' => '1', 'password' => Hash::make($password)],
            ['email' => 'demouser2@example.com', 'first_name' => 'User', 'last_name' => '2', 'password' => Hash::make($password)],
            ['email' => 'demouser3@example.com', 'first_name' => 'User', 'last_name' => '3', 'password' => Hash::make($password)],
            ['email' => 'demouser4@example.com', 'first_name' => 'User', 'last_name' => '4', 'password' => Hash::make($password)],
            ['email' => 'demouser5@example.com', 'first_name' => 'User', 'last_name' => '5', 'password' => Hash::make($password)],
            ['email' => 'demouser6@example.com', 'first_name' => 'User', 'last_name' => '6', 'password' => Hash::make($password)],
            ['email' => 'demouser7@example.com', 'first_name' => 'User', 'last_name' => '7', 'password' => Hash::make($password)],
            ['email' => 'demouser8@example.com', 'first_name' => 'User', 'last_name' => '8', 'password' => Hash::make($password)],
            ['email' => 'demouser9@example.com', 'first_name' => 'User', 'last_name' => '9', 'password' => Hash::make($password)],
            ['email' => 'demouser10@example.com', 'first_name' => 'User', 'last_name' => '10', 'password' => Hash::make($password)],
            ['email' => 'demouser11@example.com', 'first_name' => 'User', 'last_name' => '11', 'password' => Hash::make($password)],
            ['email' => 'demouser12@example.com', 'first_name' => 'User', 'last_name' => '12', 'password' => Hash::make($password)],
            ['email' => 'demouser13@example.com', 'first_name' => 'User', 'last_name' => '13', 'password' => Hash::make($password)],
            ['email' => 'demouser14@example.com', 'first_name' => 'User', 'last_name' => '14', 'password' => Hash::make($password)],
            ['email' => 'demouser15@example.com', 'first_name' => 'User', 'last_name' => '15', 'password' => Hash::make($password)],
            ['email' => 'demouser16@example.com', 'first_name' => 'User', 'last_name' => '16', 'password' => Hash::make($password)],
            ['email' => 'demouser17@example.com', 'first_name' => 'User', 'last_name' => '17', 'password' => Hash::make($password)],
            ['email' => 'demouser18@example.com', 'first_name' => 'User', 'last_name' => '18', 'password' => Hash::make($password)],
            ['email' => 'demouser19@example.com', 'first_name' => 'User', 'last_name' => '19', 'password' => Hash::make($password)],
            ['email' => 'demouser20@example.com', 'first_name' => 'User', 'last_name' => '20', 'password' => Hash::make($password)],
        ];

        DB::table('users')->insert($users);

        $events = [];
        for ($i = 1; $i <= 25; $i++) {
            $events[] = [
                'name' => 'Event ' . $i,
                'date' => Carbon::now()->addDays(rand(1, 30))->toDateTimeString(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        DB::table('events')->insert($events);

        $eventIds = DB::table('events')->pluck('id')->toArray();
        $userIds = DB::table('users')->pluck('id')->toArray();

        foreach ($eventIds as $eventId) {
            $attendeesCount = rand(0, 15);
            if ($attendeesCount > 0) {
                // Ensure $selectedUserIds is always an array
                $selectedUserIds = (array) array_rand(array_flip($userIds), $attendeesCount);
                foreach ($selectedUserIds as $userId) {
                    DB::table('event_rsvps')->insert([
                        'event_id' => $eventId,
                        'user_id' => $userId,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ]);
                }
            }
        }
    }

}