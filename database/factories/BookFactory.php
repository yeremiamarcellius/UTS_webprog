<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class BookFactory extends Factory
{
    public function definition()
    {
        $publisherId = DB::table('publishers')->pluck('id');
        return [
            //
            'publisher_id' => $this->faker->randomElement($publisherId),
            'title' => $this->faker->unique()->sentence,
            'author' => $this->faker->name,
            'year' => $this->faker->year($max = 'now'),
            'synopsis' => $this->faker->text,
            'image' => "https://picsum.photos/seed/".$this->faker->unique()->word."/640/480/"
        ];
    }
}
