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
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <label>Email</label><input type="email" name="email" />
        <label>Jelszó</label><input type="password" name="password" />
        <button type="submit">Bejelentkezés</button>
    </form>
@endsection