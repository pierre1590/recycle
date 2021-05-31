<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\note;


class Day extends Model
{
    protected $fillable = [];
    protected $guarded = [];

    use HasFactory;

    
    

    public function category(){
        return $this->hasOne(Category::class);
    }
   

    public function note(){
        return $this->hasOne(note::class);
    }
}
