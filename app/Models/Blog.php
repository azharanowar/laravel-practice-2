<?php

namespace App\Models;

use Faker\Core\File;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Blog extends Model
{
    use HasFactory;

    public static $blog, $matchedBlog, $message;

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

        echo asset('/') . $imagePath;
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        DB::table('blogs')->delete($id);

        return ['message' => "Blog successfully deleted", 'warningType' => 'danger'];
    }

    public static function updateBlogInfo($id) {
        self::$blog = self::find($id);

        return self::$blog;
    }
}
