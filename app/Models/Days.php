<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Days extends Model
{
    protected $fillable = [];
    protected $guarded = ['id'];

     public function category(){
        return $this->hasMany(Category::class);
    } 

    use HasFactory;
}
