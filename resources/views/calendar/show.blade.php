@extends('layout')

@section('title')
    Calendario 
@endsection

@section('content')
   <div class="row">
      <div class="col-md-8"></div>
          <h4 class="display-4">Calendario </h4>
      </div>
      <div class="col-md-4"></div>
        <a class="btn btn-outline-primary" href="{{route('calendar.create')}}">Aggiungi giorno</a>
      </div>
    </div>
    
             
    
@endsection