<?php
namespace App\Models;
use Illuminate\Support\Arr;
class Post {
    public static function all()
    {
        return [
            [     
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author'=>'Ayoko Ruiz Bartolomeus',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.
         Quam laboriosam distinctio rerum nostrum facere magni consequatur 
         commodi voluptates itaque sequi, officiis animi dignissimos doloremque asperiores, 
         corrupti maiores molestias magnam quibusdam.'
            ],
            [
                 'id' => 2,
                 'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author'=>'Ayoko Ruiz Bartolomeus',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.
         Quam laboriosam distinctio rerum nostrum facere magni consequatur 
         commodi voluptates itaque sequi, officiis animi dignissimos doloremque asperiores, 
         corrupti maiores molestias magnam quibusdam.'
            ],
        ];
    }

    public static function find($slug):array
    {
      $post = Arr::first(static::all(), fn($post) => $post['slug']== $slug);
      if (! $post){
        abort(404);
      }
      return $post;
    }
}