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
   
    <div class="d-flex flex-row bd-highlight mb-3 mt-4">
      @foreach ($notes as $n )
      <div class="p-1 bd-highlight">
        <div class="card text-center text-dark " style="width:16rem; left:6rem; top:12rem">
          <div class="card-header">
            <h2>{{$n->giorno_id }}</h2>
          </div>
          <div class="card-body">
            <h3 class="card-title">Tipologia rifiuto: {{ $n->tipologia_id}} </h3>
            <p class="card-text">Giorno di raccolta: {{ $n->giorno_raccolta_id }} </p>
            <p class="card-text">Ora Inizio: {{ $n->ora_inizio }}</p>
            <p class="card-text">Ora fine:  {{ $n->ora_fine }}</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">
              <a href="{{route('calendar.edit',$n->id)}}">
                <span class="material-icons">
                  edit
                </span>
              </a>
              <form class="delete" action="/calendar/{{$n->id}}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn-link">
                  <span class="material-icons">
                    delete
                  </span>
                </button>
            </form>
            </small>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  
      
      
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