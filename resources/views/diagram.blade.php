@extends('layouts.main')

@section('content')
    <h1>Mozik és a játszott filmek száma</h1>
    
    <div style="width: 80%; margin: auto;">
        <canvas id="moziChart"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const adatok = @json($diagramAdatok);
        const nevek = adatok.map(mozi => mozi.mozinev);
        const darabok = adatok.map(mozi => mozi.filmek_count);
        const ctx = document.getElementById('moziChart');

        new Chart(ctx, {
            type: 'bar', 
            data: {
                labels: nevek,
                datasets: [{
                    label: 'Játszott filmek száma',
                    data: darabok,
                    borderWidth: 1,
                    backgroundColor: 'rgba(54, 162, 235, 0.5)',
                    borderColor: 'rgba(54, 162, 235, 1)'
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 1
                        }
                    }
                }
            }
        });
    </script>
@endsection