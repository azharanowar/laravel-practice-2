<?php

namespace App\Models;

use Faker\Core\File;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Blog extends Model
{
    use HasFactory;

    public $blog, $matchedBlog, $message;

    public function changeBlogPublicationStatusById($id) {
        $this->blog = new Blog();
        $this->matchedBlog = $this->blog::find($id);

        if ($this->matchedBlog->publication_status == 0) {
            $this->matchedBlog->publication_status = 1;

            $this->message = ['message' => 'Publication status successfully changed to published', 'warningType' => 'success'];
        } else {
            $this->matchedBlog->publication_status = 0;

            $this->message = ['message' => 'Publication status successfully changed to unpublished', 'warningType' => 'danger'];
        }
        $this->matchedBlog->save();

        return $this->message;
    }

    public function deleteBlogById($id) {
        $this->blog = DB::table('blogs')->find($id);

        $imagePath = $this->blog->image;

        echo asset('/') . $imagePath;
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        DB::table('blogs')->delete($id);

        return ['message' => "Blog successfully deleted", 'warningType' => 'danger'];
    }
}
