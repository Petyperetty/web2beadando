<!-- A main.blade fileban a content szekcióban fog megjelenni a tartalom.-->
@extends('layouts.main')

@section('content')
    <section class="tiles">
        <!-- a ciklus végigiterál a $mozik tömbön. Minden ciklusban kirajzol egy újabb sort.-->
        @foreach($mozik as $mozi)
            <article class="style3">
                <span class="image">
                    <img src="https://via.placeholder.com/300?text=%20"></img>
                </span>                
                <a href="/mozi/{{ $mozi->moziazon }}">
                    <h2>{{ $mozi->mozinev }}</h2>
                    <div class="content">
                        <p>{{ $mozi->cim }}</p>
                    </div>
                </a>
            </article>
        @endforeach
    </section>
@endsection  