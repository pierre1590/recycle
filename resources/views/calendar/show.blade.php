@extends('layout')

@section('title')
    Giorno
@endsection

@section('content')
<h1 class="display-4 fw-bold fst-italic text-info">Salvataggio giorno</h1>
<div class="card mb-5 mt-5">
    <h5 class="card-header text-dark">Salvataggio</h5>
        <div class="card-body">
            @if(session()->has('message_success'))
                 <div class="alert alert-success" role="alert">
                                {{session()->get('message_success')}}
                </div>
             @endif
  
         <a href="{{route('calendar.index')}}" class="btn btn-success">Vai al calendario</a>
        </div>
</div>      
@endsection