<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //column yg bisa diakses
    protected $guarded = ['id'];
    protected $with = ['category', 'author'];

    //pastikan ada scope dalam method yang ingin kita filter
    public function scopeFilter($query, array $filter)
    {
        $query -> when($filter['search'] ?? false, function($query, $search){
            return $query->where('title', 'like', '%' . $search . '%')
                        ->orWhere('body', 'like', '%' . $search . '%'); 
        });

        $query->when($filter['category']  ?? false, function($query, $category){
            //whereHas itu relasi ke tabel category
            return $query->whereHas('category', function($query) use ($category) {
                    $query->where('slug', $category);
            });
        });

        $query -> when(
            $filter['author'] ?? false, 
            fn($query, $author)  => 
            $query-> whereHas('author', fn($query) => ($query->where('username', $author)))

        );
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
