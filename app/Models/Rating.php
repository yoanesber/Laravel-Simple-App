<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = ['book_id', 'user_id', 'rating'];
    
    public function ratings()
    {
      return $this->hasMany(Rating::class);
    }

    public function book()
    {
      return $this->belongsTo(Book::class);
    }
}
