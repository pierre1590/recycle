@extends('layout')

@section('title')
    Oggi
@endsection

@section('content')
   <div class="row">
      <div class="col-md-12"></div>
          <h4 class="display-2">
            Oggi {{$time = date('d/m/Y H:i', strtotime('now -2h'))}}
        
          </h4>
      </div>
    </div>
     
@endsection