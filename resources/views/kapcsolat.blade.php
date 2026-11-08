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
    <form method="POST" action="{{ route('kapcsolat') }}">
        @csrf
        <label>Az üzenet tárgya</label><input name="targy" />
        @guest
        <label>email</label><input type="email" name="guest_email" />
        @endguest
        <label>Üzenet</label>
        <textarea name="szoveg"></textarea>
        <button type="submit">Üzenetküldés</button>
    </form>
@endsection