<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      //   Category::trunacate();
       $this->call([
        UserSeeder::class
      ]);

       
        \App\Models\Product::factory(30)->create();
       Category::create([
        'name'=>'Food'
       ]);
       Category::create([
        'name'=>'Drink'
       ]);
       Category::create([
        'name'=>'Desert'
       ]);
    }
}
