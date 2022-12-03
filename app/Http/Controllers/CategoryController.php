<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function createNewCategory() {
        return view('category.create-category');
    }

    public static function saveCategory(Request $request) {
        Category::saveNewCategory($request);

        return back()->with(['message' => 'New category created successfully.', 'messageType' => 'success']);
    }
}
