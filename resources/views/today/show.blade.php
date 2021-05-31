@extends('layout')

@section('title')
    Oggi
@endsection

@section('content')
   <div class="row">
      <div class="col-md-12"></div>
          <h4 class="display-2">
            Today, {{strftime("%A %d %b %Y ")}}
          </h4>
      </div>
    </div>

    <div class="d-flex flex-row bd-highlight mb-3 mt-4">
      <div class="p-1 bd-highlight">
    </div>
     
@endsection