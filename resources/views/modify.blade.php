@extends('layouts.main')
@section('content')
<form method="POST" action="{{ route('modify', $mozi->moziazon) }}">
@method('PUT')    
@csrf
    <label>Mozinév</label><input type="text" name="mozinev" value="{{$mozi->mozinev}}" />
    <label>Irányítószám</label><input type="number" name="irszam" value="{{$mozi->irszam}}" />
    <label>Cím</label><input type="text" name="cim" value="{{$mozi->cim}}" />
    <label>Telefon</label><input type="text" name="telefon" value="{{$mozi->telefon}}" /><br>        
    <button type="submit">Módosítás</button>
</form>
@endsection