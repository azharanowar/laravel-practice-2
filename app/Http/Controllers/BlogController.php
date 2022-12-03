<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public static $blog, $image, $imageNewName, $directory, $imageURL, $message;

    public function addBlog() {
        return view('blog.add-blog', [
            'categories' => Category::where('publication_status', 1)->get(),
        ]);
    }

    public function manageBlog() {
        return view('blog.manage-blog', ['blogs' => Blog::all()]);
    }

    public function saveNewBlog(Request $request) {

        self::$image = $request->file('blog_image');

        self::$imageNewName = rand() . '.' . self::$image->getClientOriginalExtension();
        self::$directory = 'assets/images/';
        self::$imageURL = self::$directory . self::$imageNewName;

        self::$image->move(self::$directory, self::$imageNewName);

        self::$blog = new Blog();
        self::$blog->title = $request->blog_title;
        self::$blog->category_id = $request->blog_category_id;
        self::$blog->author = $request->blog_author;
        self::$blog->description = $request->blog_description;
        self::$blog->publication_status = $request->blog_publication_status;
        self::$blog->image = self::$imageURL;

        self::$blog->save();

        return back();
    }

    public function updatePublicationStatus(Request $request) {

        self::$blog = new Blog();
        self::$message = self::$blog->changeBlogPublicationStatusById($request['blog_id']);

        return back()->with(self::$message);
    }

    public function deleteBlog(Request $request) {
        self::$blog = new  Blog();
        $message = self::$blog->deleteBlogById($request['blog_id']);

        return back()->with($message);
    }

    public static function updateBlog(Request $request) {
        self::$blog = new Blog();

        self::$blog = self::$blog::updateBlogInfo($request['blog_id']);

        return view('blog.update-blog', [
            'blog' => self::$blog,
        ]);
    }
}
