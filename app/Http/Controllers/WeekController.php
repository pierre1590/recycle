<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Note;
use App\Models\Day;
use Illuminate\Support\Collection;


use Illuminate\Http\Request;



class WeekController extends Controller
{
    public function index(){
        
        $notes = Note::all()
           ->sortBy('day_id');
          

        return view('calendar.index',
        compact('notes'));
       
    }

    public function create(){
       
        $categories = Category::all();
        $days = Day::all();
       $note = new Note();
        

        return view('calendar.create',
        compact('categories', 'note', 'days'));
    }
    
    
    public function store(){
            
            Note::create($this->validateRequest());
            session()->flash('message_success', 'Giorno salvato correttamente !!!');
            return redirect()->route('calendar.show');
    }
    


    
    public function show(Note $note){
        
        $note = Note::find($note)->first();
        return view('calendar.show',compact('note'));
    }


    public function edit(Note $note){
      
        $categories = Category::all();
        return view('calendar.edit',compact('note','categories'));
    }
    


    public function update(Note $note){
        $note ->update($this->validateRequest());


        return redirect()->route('calendar.show',$note->day_id);
    }


    public function destroy(Note $note){
        $note->delete();
        return redirect()->route('calendar.index');
    }

    public function destroyAll(Note $note){
     
        $note->truncate();
        return redirect()->route('calendar.index');
    }


    private function validateRequest(){
        return request()->validate([
            'day_id' => 'required|unique:notes',
            'category_id' => 'required',
            'giorno_raccolta_id' => 'required',
            'ora_inizio' => 'required',
            'ora_fine' => 'required'
        ]);
    }

    

}