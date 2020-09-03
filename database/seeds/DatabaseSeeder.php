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
        factory(\App\Product::class, 40)->create();
        // $products = factory(\App\Product::class, 50)->create();
    }
}
