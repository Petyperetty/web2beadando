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
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <label>Név</label><input type="text" name="name" />
        <label>Email</label><input type="email" name="email" />
        <label>Jelszó</label><input type="password" name="password" />
        <label>Jelszó megint</label><input type="password" name="password_confirmation" /><br>        
        <button type="submit">Regisztráció</button>
    </form>
@endsection