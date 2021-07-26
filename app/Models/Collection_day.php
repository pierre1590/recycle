<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Note;




class Collection_day extends Model
{
    protected $fillable = [];
    protected $guarded = [];

    use HasFactory;

    public function note(){
            return $this->belongsTo(Note::class);
    }
 
    

}
