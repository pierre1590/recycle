<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Day;
use App\Models\Category;



class note extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $guarded = [];
    

    public function days(){
        return $this->hasOne(Day::class,'id');
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
