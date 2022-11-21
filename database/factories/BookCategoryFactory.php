<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class BookCategoryFactory extends Factory
{
    public function definition()
    {
        $bookId = DB::table('books')->pluck('id');
        $categoryId= DB::table('categories')->pluck('id');
        return [
            //
            'book_id' => $this->faker->randomElement($bookId),
            'category_id' => $this->faker->randomElement($categoryId),
        ];
    }
}
