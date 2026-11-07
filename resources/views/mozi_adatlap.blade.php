@extends('layouts.main')

@section('content')
    <h2>{{ $mozi->mozinev }} adatlapja</h2>
    <h2>Játszott filmek</h2>
    <section class="tiles">        
        @forelse($mozi->filmek as $film)
            <article class="style3">
                <span class="image">
                    <img src="https://via.placeholder.com/300?text=%20"></img>
                </span>
                <a href="#">
                    <h2>{{ $film->filmcim }}</h2>
                    <div class="content">
                        
                    </div>
                </a>
            </article>
        @empty
        <p>Nincsen film a mozihoz rendelve.</p>
        @endforelse
    </section>
@endsection  