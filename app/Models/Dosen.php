<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $guarded=['id'];
    
    // satu ke satu
    public function jurusan() {
        return $this->belongsTo(Jurusan::class);
    }

   
}
