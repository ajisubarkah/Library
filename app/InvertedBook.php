<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvertedBook extends Model
{
    public $table = 'inverted_books';
    public $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'term', 'n_books', 'n_freq', 'idf',
    ];

    public function detailIndex()
    {
        return $this->hasMany(DetailIndex::class, 'inverted_books_id');
    }
}
