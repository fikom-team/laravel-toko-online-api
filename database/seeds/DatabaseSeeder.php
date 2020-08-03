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
        if(env('APP_ENV') == "local"){
            $this->call(UserSeeder::class);
            $this->call(ProductSeeder::class);
            $this->call(ProfileSeeder::class);
        }
    }
}
