<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
       // $faker = Faker::create();
       $product_name = $this->faker->unique()->words($nb=2,$asText=true);
        return [
            'category_id'=>$this->faker->numberBetween(1,3),
           'ProductName'=>$product_name,
           'ProductPrice'=>$this-> faker->numberBetween($min=0, $max=1000),
           'Quantity'=>$this->faker->numberBetween($min=0, $max=500),
           'ProductImage' => 'product-'.$this->faker->numberBetween(1,10).'.jpg',
        ];
    }
}
