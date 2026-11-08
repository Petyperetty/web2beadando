@extends('layouts.main')
@section('content')
    @if($errors->any())
    <div style="color: red; border: 1px solid red; padding: 10px; margin-bottom: 15px;">
        <ul>
            @foreach($errors->all() as $hiba)
                <li>{{ $hiba }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="POST" action="{{ route('uzenetkuldes') }}">
        @csrf
        <label>Az üzenet tárgya</label><input name="targy" />
        <label>Üzenet</label>
        <textarea name="szoveg"></textarea>
        <button type="submit">Üzenetküldés</button>
    </form>
@endsection