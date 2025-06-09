<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
// {
//     use HasFactory;
// }
class Post
{
    private static $posts =
    [
        [
            "judul" => "Judul Post Satu",
            "slug" => "judul-post-satu",
            "penulis" => "Fawaz",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet ullam deserunt praesentium asperiores accusamus delectus rerum sint nihil dolores minima distinctio ipsam itaque, iure architecto sunt. Nam reiciendis ipsam rem culpa praesentium, asperiores aut doloribus vitae adipisci sequi odio similique et officia ratione laborum iste reprehenderit distinctio accusantium nemo repellendus?"
        ],
        [
            "judul" => "Judul Post Dua",
            "slug" => "judul-post-dua",
            "penulis" => "Cinta",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet ullam deserunt praesentium asperiores accusamus delectus rerum sint nihil dolores minima distinctio ipsam itaque, iure architecto sunt. Nam reiciendis ipsam rem culpa praesentium, asperiores aut doloribus vitae adipisci sequi odio similique et officia ratione laborum iste reprehenderit distinctio accusantium nemo repellendus?"
        ]
    ];

    public static function all()
    {
        return collect(self::$posts);
    }
    public static function find($slug)
    {
        $postsIni = static::all();
        
        return $postsIni -> firstWhere('slug', $slug);
    }
}
