@extends('layout')

@section('title')
    Giorno raccolta differenziata
@endsection

@section('content')
   
       <h1 class="display-4">Giorni</h1>
        <form action="/calendar" method="post">
            
            <div class="card text mb-5">
                <h5 class="card-header">Aggiungi giorno</h5>
                    <div class="card-body mb-3">
                            @include('calendar.form')
                            @method('post')
                            <button class="btn btn-success btn-lg">Salva</button>
                    </div>
            
            </div>
         </form>
      
      
         
            
           
        </div>
      
      
       
      
@endsection