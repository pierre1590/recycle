@extends('layout')

@section('title')
    Calendario 
@endsection

@section('content')
   <div class="row">
      <div class="col-md-12"></div>
          <h4 class="display-4">Calendario </h4>
      </div>
    </div>
    <div class="row align-items-center text-center">
      <div class="col-md-6 ">
        <a class="btn btn-outline-primary" href="{{route('calendar.create')}}">Aggiungi giorno</a>
      </div>
      <div class="col-md-6">
       <a class="btn btn-outline-danger" href="{{route('calendar.deleteAll')}}">Cancella calendario</a>
    </div>
   

  
      <div class="d-flex flex-row bd-highlight mb-3">
        @foreach ($notes as $n )
        <div class="p-2 bd-highlight">
        <div class="card text-center mt-2" style="width: 18rem; left:5rem">
          <div class="card-header">
            <h2>{{$n->days->giorno}}</h2>
          </div>
          <div class="card-body">
            <h3 class="card-title">Tipologia rifiuto: {{ $n->tipologia }} </h3>
            <p class="card-text">Giorno di raccolta: {{ $n->giorno_raccolta }} </p>
            <p class="card-text">Ora Inizio: {{ $n->ora_inizio }}</p>
            <p class="card-text">Ora fine:  {{ $n->ora_fine }}</p>
            
          </div>
          <div class="card-footer text-muted">
              <a href="">
                <span class="material-icons">
                    edit
                </span>
              </a>
              <form  method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn-link">
                  <span class="material-icons">
                    delete
                  </span>
                </button>
            </form>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    
          <style>
            .btn-link{
              border: none;
              outline:none;
              background: none;
              cursor: pointer;
              color: #0000ee;
              padding: 0;
              text-decoration: underline;
              font-family: inherit;
              font-size: inherit;
            }
          </style>
        
 @endsection             