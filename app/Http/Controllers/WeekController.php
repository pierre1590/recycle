<?php

namespace App\Http\Controllers;

use App\Models\Week;
use App\Models\Category;
use App\Models\Days;
use Illuminate\Http\Request;

class WeekController extends Controller
{

    public function index(){    
        $days = Days::all();
        return view(
            'calendar.index',
            compact('days'));
    }



    public function create(){
        
        $categories = Category::all();
        $day = new Days();
        return view(
            'calendar.create',
            compact('categories','day'));
    }


    public function store(){
        
        Days::create($this->validateRequest());
        return redirect()->route('calendar.index'); 
    }



    public function show(Days $day){
        $day = Days::find($day)->first();
        return view('calendar.show',compact('day'));
    }
}
