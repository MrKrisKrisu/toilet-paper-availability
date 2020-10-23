@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="py-5 text-center">
            <h2>Klopapier Verfügbarkeit</h2>
            <hr/>
            <h3>{{$store->name}}<br/><small>{{$store->address}}</small></h3>

            <p class="lead">Es standen <b>{{$store->last_checked->diffForHumans()}}</b> noch <b>{{$store->last_stock}}
                    Packungen</b>
                zur Verfügung.</p>
            <a href="/">Zurück zur Startseite</a>
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <canvas id="chartHistory" style="width: 100%; height: 400px;"></canvas>
                <a href="/">Zurück zur Startseite</a>
            </div>
        </div>
        <script>
            $(document).ready(function () {
                var ctx = document.getElementById('chartHistory').getContext('2d');
                var config = {
                    type: 'line',
                    data: {
                        datasets: [
                            {
                                label: "Lagerbestand",
                                data: [
                                        @foreach(\App\Http\Controllers\ApiController::getHistoryStock($store->id) as $row)
                                    {
                                        x: '{{$row['timestamp']->format('Y-m-d H:i')}}', y: {{$row['stock_level']}}
                                    },
                                    @endforeach
                                ],
                                fill: false,
                                borderColor: 'red'
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        scales: {
                            xAxes: [{
                                type: "time",
                                time: {
                                    format: 'YYYY-MM-DD HH:ii',
                                },
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Zeit'
                                }
                            }],
                            yAxes: [{
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Anzahl Produkte'
                                }
                            }]
                        }
                    }
                };
                new Chart(ctx, config);
            });

        </script>
    </div>
@endsection
