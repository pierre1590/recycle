<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Note;
use App\Models\Day;

class Category extends Model
{
    protected $fillable = [];
    protected $guarded = [];
    
    use HasFactory;


    public function notes(){
        return $this->hasOne(Note::class);
    }

    public function days(){
        return $this->belongsTo(Day::class);
    }


   
}
