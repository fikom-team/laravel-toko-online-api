<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = collect([
            [
                'name'     => 'hanan',
                'email'    => 'hasyrawi@gmail.com',
                'is_admin' => true,
                'is_agent' => false,
            ],
            [
                'name'     => 'user',
                'email'    => 'user@gmail.com',
                'is_admin' => false,
                'is_agent' => true,
            ]
        ]);

        $user->each(function ($user) {
            factory(User::class)->create([
                'name'     => $user['name'],
                'email'    => $user['email'],
                'is_admin' => $user['is_admin'],
                'is_agent' => $user['is_agent'],
            ]);
        });

        factory(User::class)->state('is_admin')->create();
        factory(User::class)->state('is_agent')->create();
    }
}
