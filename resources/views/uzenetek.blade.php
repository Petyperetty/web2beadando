@extends('layouts.main')
@section('content')
    <table>
        <thead>
            <tr>
                <th>Feladó</th>
                <th>Tárgy</th>
                <th>Üzenet szövege</th>
            </tr>
        </thead>
        <tbody>
            @foreach($uzenetek as $uzenet)
                <tr>
                @if($uzenet->user_id == null && $uzenet->guest_email)  
                    <td>{{ $uzenet->guest_email }}</td>
                @else
                    <td>{{ $uzenet->user_id }}</td>
                @endif
                    <td>{{ $uzenet->targy }}</td>
                    <td>{{ $uzenet->szoveg }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection