<?php

namespace App\Http\Controllers;


use App\Models\note;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class WeekController extends Controller
{
    public function index(){
        
       
        $notes = note::all();
       
        
        return view(
            'calendar.index',
            compact('notes'));
    }

    public function create(){
        
        
        $note = new note();
        return view(
            'calendar.create',
            compact('note'));
    }


    public function store(){
        
        note::create($this->validateRequest());
        return redirect()->route('calendar.index'); 
    }


    public function show(note $note){
        $note = note::find($note)->first();
        return view('calendar.show',compact('note'));
    }


    public function edit(note $note){
        $note = note::all();
        return view('calendar.edit',compact('note'));
    }
    


    public function update(note $note){
        $note ->update($this->validateRequest());


        return redirect()->route('calendar.show',$note->id);
    }


    public function destroy(note $note){
        $note->delete();
        return redirect()->route('calendar.index');
    }


    private function validateRequest(){
        return request()->validate([
            'giorno' => 'required|unique:notes',
            'tipologia' => 'required',
            'giorno_raccolta' => 'required',
            'ora_inizio' => 'required',
            'ora_fine' => 'required'
        ]);
    }

}