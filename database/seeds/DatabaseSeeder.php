<?php

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
        $this->call(WebConfigSeeder::class);
        $this->call(WebContentSeeder::class);
        // $this->call(UsersTableSeeder::class);
    }
}
