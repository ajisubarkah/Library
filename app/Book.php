<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $table = 'books';
    public $primaryKey = 'id';

    protected $fillable = [
        'books_category_id', 'name', 'synopsis', 'image', 'status',
    ];
}
