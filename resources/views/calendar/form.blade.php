<div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupSelect01">Giorno</label>
  <select name="day_id" class="form-select" id="inputGroupSelect01">
   @foreach ($days as $day)
        <option value="{{$day->id}}" {{$note->day_id == $day->id ? 'selected' : ' '}} >{{$day->name}}</option>
      @endforeach
  </select>
</div>

@if($errors->has('day_id'))
<div class="alert alert-danger" role="alert">
    {{ $errors->first('day_id')}}
</div>
@endif

<div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupSelect01">Tipologia</label>
  <select name="category_id" class="form-select" id="inputGroupSelect01">
       
    @foreach ($categories as $c)
        <option value="{{$c->id}}" {{$note->category_id == $c->id ? 'selected' : ' '}} >{{$c->name}}</option>
      @endforeach
  </select>
</div>

@if($errors->has('category_id'))
<div class="alert alert-danger" role="alert">
    {{ $errors->first('category_id')}}
</div>
@endif



<div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupSelect01">Giorno raccolta</label>
  <select name="giorno_raccolta_id" class="form-select" id="inputGroupSelect01">
    @foreach ($days as $d)
        <option value="{{$d->id}}" {{$note->giorno_raccolta_id == $d->id ? 'selected' : ' '}} >{{$d->name}}</option>
      @endforeach
  </select>
</div>

@if($errors->has('giorno_raccolta_id'))
<div class="alert alert-danger" role="alert">
    {{ $errors->first('giorno_raccolta_id')}}
</div>
@endif

<div class="input-group mb-3">
  <label class="input-group-text">Ora inizio</label>
  <input type="time" name="ora_inizio" value="{{old('ora_inizio')}}">
</div>

@if($errors->has('ora_inizio'))
<div class="alert alert-danger" role="alert">
    {{ $errors->first('ora_inizio')}}
</div>
@endif

<div class="input-group mb-3">
  <label class="input-group-text">Ora fine</label>
  <input type="time" name="ora_fine" value="{{old('ora_fine')}}">
</div>

@if($errors->has('ora_fine'))
<div class="alert alert-danger" role="alert">
    {{ $errors->first('ora_fine')}}
</div>
@endif

@csrf