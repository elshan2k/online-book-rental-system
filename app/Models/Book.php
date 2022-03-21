<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [ 'title', 'authors', 'description', 'released_at', 'pages',
     'image_url', 'language_code', 'isbn', 'in_stock' ];

    // public function tracks() {
    //     return $this->hasMany(Book::class);
    // }
}
