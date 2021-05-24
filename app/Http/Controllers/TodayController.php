<?php

namespace App\Http\Controllers;

use App\Models\note;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TodayController extends Controller
{
    public function show()
    {
      $currentDate = date("Y-m-d");
  
      return view("today.show", [
        "notes" => note::where("giorno", "=", $currentDate)
      ]);
    }

    
   
}
