<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Day;

class Category extends Model
{
    protected $fillable = [];
    protected $guarded = [];
    
    use HasFactory;


    public function days(){
        return $this->hasOne(Day::class);
    }


   
}
