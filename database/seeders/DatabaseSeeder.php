<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AdminSeeder::class,
            UserSeeder::class,
            EventSeeder::class,
            AnnouncementSeeder::class,
            BillSeeder::class,

            // Disable on prod
            MessagesSeeder::class,
            TestSeeder::class,
        ]);
    }
}
