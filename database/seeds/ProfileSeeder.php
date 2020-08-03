<?php

use App\Profile;
use App\User;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::get()->each(function ($user) {
            return factory(Profile::class)->create([
                'user_id' => $user['id']
            ]);
        });
    }
}
