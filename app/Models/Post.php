<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //column yg bisa diakses
    protected $guarded=['id'];
    protected $with = ['category', 'author'];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }
    
}
