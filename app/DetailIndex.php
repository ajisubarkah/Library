<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailIndex extends Model
{
    public $table = 'detail_indexes';
    public $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'books_id', 'inverted_books_id', 'freq', 'weight'
    ];

    public function invertedBook()
    {
        return $this->belongsTo(InvertedBook::class, 'inverted_books_id');
    }

    public function book()
    {
        return $this->belongsTo(Book::class, 'books_id');
    }
}
