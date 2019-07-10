<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookCategory extends Model
{
    public $table = 'books_category';
    public $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'name'
    ];
}
