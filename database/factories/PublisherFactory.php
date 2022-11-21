<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PublisherFactory extends Factory
{
    public function definition()
    {
        return [
            //
            'name' => $this->faker->name,
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'image' => "https://picsum.photos/seed/".$this->faker->unique()->word."/640/480/",
        ];
    }
}
