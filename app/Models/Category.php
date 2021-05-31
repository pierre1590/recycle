<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\note;
use App\Models\Day;

class Category extends Model
{
    protected $fillable = [];
    protected $guarded = [];
    
    use HasFactory;


    public function notes(){
        return $this->hasOne(note::class);
    }

    public function days(){
        return $this->hasOne(Day::class);
    }


   
}
