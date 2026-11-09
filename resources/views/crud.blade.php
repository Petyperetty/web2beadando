@extends('layouts.main')
@section('content')
    <table>
        <thead>
            <tr>
                <th>Mozi neve</th>
                <th>Irányítószám</th>
                <th>Cím</th>
                <th>Telefon</th>
                <th>CRUD</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mozik as $mozi)
                <tr>                
                    <td>{{ $mozi->moziazon }}</td>                
                    <td>{{ $mozi->mozinev }}</td>                
                    <td>{{ $mozi->irszam }}</td>
                    <td>{{ $mozi->cim }}</td>
                    <td>{{ $mozi->telefon }}</td>
                    <td>
                        <form action="{{ route('mozi.torles', $mozi->moziazon) }}" method="POST">
                        @method('DELETE')    
                        @csrf
                            <button type="submit">Törlés</button>
                        </form>
                        <form action="{{ route('mozi.modify', $mozi->moziazon) }}" method="POST">
                        @csrf
                            <button type="submit">Módosítás</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection