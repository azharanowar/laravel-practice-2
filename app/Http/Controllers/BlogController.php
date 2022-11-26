<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public $blog;

    public function addBlog() {
        return view('blog.add-blog');
    }

    public function manageBlog() {
        return view('blog.manage-blog', ['blogs' => Blog::getAllBlog()]);
    }

    public function saveNewBlog(Request $request) {

        $this->blog = new Blog();

        $this->blog->title = $request->blog_title;
        $this->blog->category_id = $request->blog_category_id;
        $this->blog->author = $request->blog_author;
        $this->blog->description = $request->blog_description;
        $this->blog->publication_status = $request->blog_publication_status;
        $this->blog->image = $request->blog_image;

        $this->blog->save();

        return back();
    }
}
