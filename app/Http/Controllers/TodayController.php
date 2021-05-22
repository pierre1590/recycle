<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class TodayController extends Controller
{
    public function show(){
        return view('today.show');
    }

    
   
}
