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
   

    @foreach ($notes as $note )
        
     
        <div class="card text-center mt-5 " style="width: 20rem; left:8rem">
          <div class="card-header">
            <h2>{{$note->giorno}}</h2>
          </div>
          <div class="card-body">
            <h3 class="card-title"> {{ $note->tipologia }} </h3>
            <p class="card-text">Giorno di raccolta: {{ $note->giorno_raccolta }} </p>
            <p class="card-text">Ora Inizio: {{ $note->ora_inizio }}</p>
            <p class="card-text">Ora fine:  {{ $note->ora_fine }}</p>
            
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
    @endforeach
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