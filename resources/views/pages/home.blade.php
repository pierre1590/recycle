@extends('layout')

@section('title')
    Raccolta differenziata
@endsection

@section('content')
    <h1 class="display-2 fw-bold fst-italic text-info">Raccolta differenziata</h1>
    <h3 class=" text-white fw-bolder fst-italic" >Contribuisci anche tu a mantenere pulito il pianeta.
        <br>Crea adesso il tuo 
        <a class="nav-link {{Route::currentRouteName() == 'calendar.index' ? 'active' : ''}}" aria-current="page" href="{{route('calendar.index')}}">
            <h2 class="fs-1 text-info fst-italic text-decoration-underline">calendario</h2></a> per la raccolta differenziata.
        
    </h3>
@endsection