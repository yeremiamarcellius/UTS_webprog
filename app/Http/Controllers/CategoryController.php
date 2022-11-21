<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function showById($id)
    {
        $category = Category::findOrFail($id);
        return view('category', compact('category'));
    }
}
