<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Note;
use App\Models\Day;
use App\Models\Collection_day;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Builder;


use Illuminate\Http\Request;



class WeekController extends Controller
{

    

    public function index(){
        
         $notes = Note::with('day')
           ->orderBy('day_id','asc')
           ->get();
          

        return view('calendar.index',
        compact('notes'));
    
    }

    public function create(){
        $collections = Collection_day::all();
        $categories = Category::all();
        $days = Day::all();
        $note = new Note();
        

        return view('calendar.create',
        compact('categories', 'note', 'days','collections'));
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
        $collections = Collection_day::all();
        $days = Day::all();
        $categories = Category::all();
        return view('calendar.edit',compact('note','categories','days','collections'));
    }
    


    public function update(Note $note){
        $note ->update($this->validateRequest1());

        session()->flash('message_success', 'Giorno salvato correttamente !!!');

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

    private function validateRequest1(){
        return request()->validate([
            'day_id' => 'required',
            'category_id' => 'required',
            'giorno_raccolta_id' => 'required',
            'ora_inizio' => 'required',
            'ora_fine' => 'required'
        ]);
    }
    

}