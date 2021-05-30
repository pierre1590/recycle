<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\note;


class Day extends Model
{
    protected $fillable = [];
    protected $guarded = [];

    use HasFactory;

    
    public function notes(){
        return $this->hasOne(note::class);
    }

   
}
