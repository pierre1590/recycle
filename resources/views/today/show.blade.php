@extends('layout')

@section('title')
    Oggi
@endsection

@section('content')
   <div class="row">
      <div class="col-md-12"></div>
          <h4 class="display-2 fw-bold fst-italic text-primary">
            Oggi, {{ $currentDate->isoFormat('llll')}}
          </h4>
      </div>
    </div>
   @foreach ($note as $n )
    
  
    
  
    <div class="d-flex flex-row bd-highlight mb-3 mt-4">
    
      
     
      <div class="p-1 bd-highlight">
       
         <div class="card fw-bolder text-center border-success text-primary " style="width:16rem; left:55rem; top:6rem">
         
          <div class="card-header">
              <h2>{{$n->day->name}}</h2>
          </div>
            <div class="card-body">
           
              <h3 class="card-title">{{$n->category->name}}</h3>
             
              <p class="card-text">Giorno di raccolta: {{$n->collection->name}} </p>
              <p class="card-text">Ora Inizio: {{$n->ora_inizio}} </p>
              <p class="card-text">Ora fine: {{$n->ora_fine}} </p>        
            </div>
        </div>       
       
      </div>
      
     
     
     @endforeach
     
     
     

    
    </div> 
   
    </div>
     
@endsection