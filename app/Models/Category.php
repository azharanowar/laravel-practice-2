<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    private static $category;

    public static function saveNewCategory($categoryData) {
       self::$category = new Category();

        self::$category['category_name'] = $categoryData['category_name'];
        self::$category['publication_status'] = $categoryData['publication_status'];

       self::$category->save();
    }
}
