@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="py-5 text-center">
            <h2>Klopapier Verfügbarkeit</h2>
            <p class="lead">Keine Panik! Es stehen
                noch {{number_format(\App\Models\Store::all()->sum('currentStock'), 0, ",", ".")}} Packungen
                Toilettenpapier zur Verfügung.</p>
        </div>

        <div class="row">
            <div class="col-md-12">
                @include('map')
            </div>
            <div class="col-md-12">
                <table class="table">
                    @foreach(\App\Models\Store::all() as $store)
                        <tr>
                            <td>{{$store->id}}</td>
                            <td>{{$store->currentStock}} Packungen verfügbar</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
