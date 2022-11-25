<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public static function getAllBlog() {
        return [
          0  => [
              'id'          =>  1,
              'title'       =>  'This Is Blog Title One',
              'category'    =>  'Blog Category',
              'author'      =>  'Azhar Anowar',
              'description' =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis ea expedita facere illum possimus tempora. Aliquam asperiores doloremque doloribus, illum in laboriosam laudantium magnam nisi quaerat rerum soluta vel veniam?',
          ],
          1  => [
              'id'          =>  2,
              'title'       =>  'This Is Blog Title One',
              'category'    =>  'Blog Category',
              'author'      =>  'Azhar Anowar',
              'description' =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis ea expedita facere illum possimus tempora. Aliquam asperiores doloremque doloribus, illum in laboriosam laudantium magnam nisi quaerat rerum soluta vel veniam?',
          ],
          2  => [
              'id'          =>  3,
              'title'       =>  'This Is Blog Title One',
              'category'    =>  'Blog Category',
              'author'      =>  'Azhar Anowar',
              'description' =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis ea expedita facere illum possimus tempora. Aliquam asperiores doloremque doloribus, illum in laboriosam laudantium magnam nisi quaerat rerum soluta vel veniam?',
          ],
          3  => [
              'id'          =>  4,
              'title'       =>  'This Is Blog Title One',
              'category'    =>  'Blog Category',
              'author'      =>  'Azhar Anowar',
              'description' =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis ea expedita facere illum possimus tempora. Aliquam asperiores doloremque doloribus, illum in laboriosam laudantium magnam nisi quaerat rerum soluta vel veniam?',
          ],
          4  => [
              'id'          =>  5,
              'title'       =>  'This Is Blog Title One',
              'category'    =>  'Blog Category',
              'author'      =>  'Azhar Anowar',
              'description' =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis ea expedita facere illum possimus tempora. Aliquam asperiores doloremque doloribus, illum in laboriosam laudantium magnam nisi quaerat rerum soluta vel veniam?',
          ],
          5  => [
              'id'          =>  6,
              'title'       =>  'This Is Blog Title One',
              'category'    =>  'Blog Category',
              'author'      =>  'Azhar Anowar',
              'description' =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis ea expedita facere illum possimus tempora. Aliquam asperiores doloremque doloribus, illum in laboriosam laudantium magnam nisi quaerat rerum soluta vel veniam?',
          ],
        ];
    }
}
