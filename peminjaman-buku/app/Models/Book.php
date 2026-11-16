<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
//Oop
{
    protected $fillable = ['title', 'author', 'publisher', 'year', 'stock'];
}
