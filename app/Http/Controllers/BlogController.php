<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public static $blog, $image, $imageNewName, $directory, $imageURL, $message;
    public $blogs;

    public function addBlog() {
        return view('blog.add-blog', [
            'categories' => Category::where('publication_status', 1)->get(),
        ]);
    }

    public function manageBlog() {
        $this->blogs = DB::table('blogs')
            ->join('categories', 'blogs.category_id', 'categories.id')
            ->select('blogs.*', 'categories.category_name')
            ->get();

        return view('blog.manage-blog',
            [
                'blogs'         => $this->blogs,
            ]
        );
    }

    public function saveNewBlog(Request $request) {
        Blog::saveNewBlog($request);

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
        self::$blog = Blog::find($request['blog_id']);

        return view('blog.update-blog', [
            'blog' => self::$blog,
            'categories' => Category::where('publication_status', 1)->get(),
        ]);
    }

    public static function saveUpdateBlogInfo(Request $request) {
        Blog::saveUpdatedBlogInfo($request);

        return back()->with(['message' => "Blog successfully updated", 'warningType' => 'success']);
    }
}
