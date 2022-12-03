<?php

namespace App\Models;

use Faker\Core\File;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Blog extends Model
{
    use HasFactory;

    public static $blog, $matchedBlog, $message, $image, $imageNewName, $directory, $imageURL;

    public static function saveNewBlog($blogData) {
        self::$image = $blogData->file('blog_image');
        self::saveImage();

        self::$blog = new Blog();
        self::$blog->title = $blogData->blog_title;
        self::$blog->category_id = $blogData->blog_category_id;
        self::$blog->author = $blogData->blog_author;
        self::$blog->description = $blogData->blog_description;
        self::$blog->publication_status = $blogData->blog_publication_status;
        self::$blog->image = self::$imageURL;

        self::$blog->save();
    }

    public static function saveImage() {
        self::$imageNewName = rand() . '.' . self::$image->getClientOriginalExtension();
        self::$directory = 'assets/images/';
        self::$imageURL = self::$directory . self::$imageNewName;
        self::$image->move(self::$directory, self::$imageNewName);
    }

    public function changeBlogPublicationStatusById($id) {
        self::$blog = new Blog();
        self::$matchedBlog = self::$blog::find($id);

        if (self::$matchedBlog->publication_status == 0) {
            self::$matchedBlog->publication_status = 1;

            self::$message = ['message' => 'Publication status successfully changed to published', 'warningType' => 'success'];
        } else {
            self::$matchedBlog->publication_status = 0;

            self::$message = ['message' => 'Publication status successfully changed to unpublished', 'warningType' => 'danger'];
        }
        self::$matchedBlog->save();

        return self::$message;
    }

    public function deleteBlogById($id) {
        self::$blog = DB::table('blogs')->find($id);

        $imagePath = self::$blog->image;
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        DB::table('blogs')->delete($id);

        return ['message' => "Blog successfully deleted", 'warningType' => 'danger'];
    }

    public static function saveUpdatedBlogInfo($updateBlogData) {
        self::$blog = new Blog();
        self::$blog = self::$blog::find($updateBlogData['blog_id']);

        print_r($updateBlogData);
//        self::updateImage($updateBlogData['image']);

        return;

        self::$blog['title'] = $updateBlogData['blog_title'];
        self::$blog['category_id'] = $updateBlogData['blog_category_id'];
        self::$blog['author'] = $updateBlogData['blog_author'];
        self::$blog['description'] = $updateBlogData['blog_description'];
        self::$blog['publication_status'] = $updateBlogData['blog_publication_status'];
    }

    public static function updateImage($existingImage) {
        echo $existingImage;
        if (file_exists($existingImage)) {
        }
    }
}
