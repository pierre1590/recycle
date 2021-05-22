<?php

namespace App\Models;

use App\Models\Days;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    public function days(){
        return $this->belongsTo(Days::class);
    }



    use HasFactory;
}
