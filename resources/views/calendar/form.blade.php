<div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupSelect01">Giorno</label>
  <select name="giorno" class="form-select" id="inputGroupSelect01">
   @foreach ($days as $day)
        <option value="{{$day->id}}" {{$note->giorno_id == $day->id ? 'selected' : ''}} >{{$day->giorno}}</option>
      @endforeach
  </select>
</div>

@if($errors->has('giorno'))
<div class="alert alert-danger" role="alert">
    {{ $errors->first('giorno')}}
</div>
@endif

<div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupSelect01">Tipologia</label>
  <select name="tipologia" class="form-select" id="inputGroupSelect01">
    @foreach ($categories as $c)
        <option value="{{$c->id}}" {{$note->tipologia_id == $c->id ? 'selected' : ''}} >{{$c->categoria}}</option>
      @endforeach
  </select>
</div>

@if($errors->has('tipologia'))
<div class="alert alert-danger" role="alert">
    {{ $errors->first('tipologia')}}
</div>
@endif

<div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupSelect01">Giorno raccolta</label>
  <select name="giorno_raccolta" class="form-select" id="inputGroupSelect01">
    @foreach ($days as $day)
        <option value="{{$day->id}}" {{$note->giorno_raccolta_id == $day->id ? 'selected' : ''}} >{{$day->giorno}}</option>
      @endforeach
  </select>
</div>

@if($errors->has('giorno_raccolta'))
<div class="alert alert-danger" role="alert">
    {{ $errors->first('giorno_raccolta')}}
</div>
@endif

<div class="input-group mb-3">
  <label class="input-group-text">Ora inizio</label>
  <input type="time" name="ora_inizio">
</div>

@if($errors->has('ora_inizio'))
<div class="alert alert-danger" role="alert">
    {{ $errors->first('ora_inizio')}}
</div>
@endif

<div class="input-group mb-3">
  <label class="input-group-text">Ora fine</label>
  <input type="time" name="ora_fine">
</div>

@if($errors->has('ora_fine'))
<div class="alert alert-danger" role="alert">
    {{ $errors->first('ora_fine')}}
</div>
@endif

@csrf