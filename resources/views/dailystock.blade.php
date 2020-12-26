<hr/>
<h2>Wie viel Toilettenpapier haben alle <i>dm</i> Filialen* zusammen?</h2>
<canvas id="chartHistory" style="width: 100%; height: 400px;"></canvas>
<small class="text-muted">*Es wird der Lagerbestand von allen Filialen in Deutschland kummuliert, die diesen online
    bereitstellen.</small>

<script>
    $(document).ready(function () {
        var ctx = document.getElementById('chartHistory').getContext('2d');
        var config = {
            type: 'line',
            data: {
                datasets: [
                    {
                        label: "",
                        data: [
                                @foreach(\App\Models\DailyStock::orderBy('date')->get() as $dailyStock)
                            {
                                x: '{{$dailyStock->date->format('Y-m-d')}}', y: {{$dailyStock->stock_level}}
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
