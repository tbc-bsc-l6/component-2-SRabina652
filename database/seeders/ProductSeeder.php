<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 1; $i <= 20; $i++){
        $data = new Product;
        $data->ProductName = $faker->word() . ' utensils';////randomElement(Brands::pluck('name')) . ' utensil';
        $data->ProductPrice = $faker->numberBetween($min=0, $max=100000);
        $data->Quantity = $faker->numberBetween($min=0, $max=100000);
        $data->ProductImage = $faker->imageUrl($width=150, $height=150);
        $data->save();       
    }
    }
}
