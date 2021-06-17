<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Note;
use App\Models\Day;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;



class WeekController extends Controller
{
    public function index(){
        
        $notes = DB::table('notes')
        ->orderBy('notes.giorno_id','asc')
        ->get();

        return view('calendar.index',
        compact('notes'));
       
    }

    public function create(){
       
        $categories = Category::all();
        $days = Day::all();
        $note = new note();
        

        return view('calendar.create',
        compact('categories', 'note', 'days'));
    }
    
    
    public function store(){
            
            Note::create($this->validateRequest());
            session()->flash('message_success', 'Giorno salvato correttamente !!!');
            return redirect()->route('calendar.show');
    }
    


    
    public function show(Note $notes){
        
        $notes = Note::find($notes)->first();
        return view('calendar.show',compact('notes'));
    }


    public function edit(Note $note){
        $days = Day::all();
        $categories = Category::all();
        return view('calendar.edit',compact('note','categories','days'));
    }
    


    public function update(Note $note){
        $note ->update($this->validateRequest());


        return redirect()->route('calendar.show',$note->giorno_id);
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
            'giorno_id' => 'required|unique:notes',
            'tipologia_id' => 'required',
            'giorno_raccolta_id' => 'required',
            'ora_inizio' => 'required',
            'ora_fine' => 'required'
        ]);
    }

    

}