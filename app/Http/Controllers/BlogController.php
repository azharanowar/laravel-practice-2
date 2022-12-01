<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public $blog, $image, $imageNewName, $directory, $imageURL;

    public function addBlog() {
        return view('blog.add-blog');
    }

    public function manageBlog() {
        return view('blog.manage-blog', ['blogs' => Blog::all()]);
    }

    public function saveNewBlog(Request $request) {

        $this->image = $request->file('blog_image');

        $this->imageNewName = rand() . '.' . $this->image->getClientOriginalExtension();
        $this->directory = 'assets/images/';
        $this->imageURL = $this->directory . $this->imageNewName;

        $this->image->move($this->directory, $this->imageNewName);

        $this->blog = new Blog();
        $this->blog->title = $request->blog_title;
        $this->blog->category_id = $request->blog_category_id;
        $this->blog->author = $request->blog_author;
        $this->blog->description = $request->blog_description;
        $this->blog->publication_status = $request->blog_publication_status;
        $this->blog->image = $this->imageURL;

        $this->blog->save();

        return back();
    }
}
