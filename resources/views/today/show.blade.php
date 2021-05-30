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
     
@endsection