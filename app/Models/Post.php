<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'topic_id', 'content'];

    
    public function topic() {
        //itt azért nem kell 'topic_id', mert a laravel kitalálja
        return $this->belongsTo(Topic::class);
    }

    public function author() {
        //itt meg azért kell 'author_id', mert a user táblában nem 'user_id'-nek neveztük el a kulcsot
        return $this->belongsTo(User::class, 'author_id');
    }
}
