<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // input sesuai tabel
    // protected $fillable = ['title', 'author', 'excerpt', 'body'];
    // yang tidak diinput
    protected $guarded = ['id'];
}
