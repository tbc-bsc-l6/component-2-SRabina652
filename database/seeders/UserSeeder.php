<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
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
        $data = new User;
        $data->name = $faker->name();
        $data->email = $faker->email();
        $data->dob=$faker->date();
        $data->address=$faker->address();
        $data->gender=$faker->randomElement(['F', 'M','O']);
        $data->password = $faker->numberBetween($min=0, $max=20);
        $data->save();   
    //    Product::factory(10)->create();
    }
}
}
