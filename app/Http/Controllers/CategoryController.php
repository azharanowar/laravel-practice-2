<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function createNewCategory() {
        return view('category.create-category');
    }
}
