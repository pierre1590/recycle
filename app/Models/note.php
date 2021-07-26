<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Day;
use App\Models\Category;
use App\Models\Collection_day;



class Note extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $guarded = [];
    protected $primaryKey = 'id';

    public function day(){
        return $this->belongsTo(Day::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function collection(){
        return $this->belongsTo(Collection_day::class);
    }
   
}
