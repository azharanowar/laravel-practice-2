<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function addBlog() {
        return view('blog.add-blog');
    }

    public function manageBlog() {
        return view('blog.manage-blog');
    }
}
