<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Day;
use App\Models\Note;

use Carbon\Carbon;


class TodayController extends Controller
{
    public function show(Note $notes)
    {
      $currentDate = Carbon::now()->locale('it_IT')->timezone('Europe/Rome');
      $categories = Category::all();
      $day = Day::where('name', $currentDate->dayName)->first();
      $notes = Note::where('day_id', $day->id)->get();  
      return view('today.show',compact('currentDate','notes','day'));
    }

    
        
}
