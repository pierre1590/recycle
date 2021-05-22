@extends('layout')

@section('title')
    Giorno raccolta differenziata
@endsection

@section('content')
   
       <h1 class="display-4">Giorni</h1>
        <form action="/calendar" method="POST">
            <div class="card text-center mb-5">
                <h5 class="card-header">Aggiungi giorno</h5>
                    <div class="card-body mb-4">
                            @include('calendar.form')
                            
                            <button class="btn btn-success btn-lg">Salva</button>
                    </div>
            
            </div>
         </form>
      
      
         
            
           
        </div>
      
      
       
      
@endsection