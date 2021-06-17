@extends('layout')

@section('title')
    Calendario 
@endsection

@section('content')
   <div class="row">
      <div class="col-md-12"></div>
          <h3 class="display-4  fw-bold fst-italic text-info">Calendario </h3>
      </div>
    </div>
    <div class="row align-items-center text-center">
      <div class="col-md-6 ">
        <a class="btn btn-outline-primary " href="{{route('calendar.create')}}">Aggiungi giorno</a>
      </div>
      <div class="col-md-6">
        <form action="/calendar" method="POST" class="deleteAll">
          @method('DELETE')
          @csrf
              <button class="btn btn-outline-danger" type="submit" >Cancella calendario</button>
        </form>
      </div>
   
    <div class="d-flex flex-row bd-highlight mb-3 mt-4">
      @foreach ($notes as $n )
      <div class="p-1 bd-highlight">
        <div class="card text-center text-dark " style="width:16rem; left:13rem; top:12rem">
          <div class="card-header">
            
            <h2>{{$n->day->name}}</h2>
          </div>
          <div class="card-body">
            <h3 class="card-title">{{ $n->category->name}} </h3>
            <p class="card-text">Giorno di raccolta: {{ $n->day->name }} </p>
            <p class="card-text">Ora Inizio: {{ $n->ora_inizio }}</p>
            <p class="card-text">Ora fine:  {{ $n->ora_fine }}</p>
          </div>
          <div class="card-footer">
            
             <div class="row align-items-start ">
               <div class="col-md-6">
                    <a href="{{route('calendar.edit',$n->id)}}">
                        <span class="material-icons">
                           edit
                        </span>
                    </a>
                </div>
                <div class="col-md-6">
                    <form class="delete" action="/calendar/{{$n->id}}" method="POST">
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
  
 @section('script_ext')
<script>
  $(".deleteAll").on("submit", function(){
    return confirm("Sei sicuro di voler eliminare il calendario ?");
  });
</script>
@endsection