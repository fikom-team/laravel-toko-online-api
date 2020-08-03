<?php

use App\Product;
use App\User;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::get()->where('is_agent', true)->each(function ($user) {
            factory(Product::class, rand(10, 40))->create([
                'user_id' => $user['id'],
            ]);
        });
    }
}
