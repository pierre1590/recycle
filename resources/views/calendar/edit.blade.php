@extends('layout')

@section('title')
    Modifica giorno
@endsection

@section('content')
   
       <h4 class="display-4">Modifica Giorno</h4>
        <form action="/calendar/{{$note->id}}" method="POST">
            <a class="btn btn-dark mb-3" href="{{route('calendar.index')}}">Torna indietro</a>
            <div class="card mb-5 text-dark ">
                <h5 class="card-header">Modifica giorno : {{$note->day->name}}</h5>
                    <div class="card-body">
                            @method('PATCH')
                            @include('calendar.form')
                        <button class="btn btn-success">Salva</button>
                    </div>
            
            </div>
         </form>
      
      
         
            
           
        </div>
      
      
       
      
@endsection