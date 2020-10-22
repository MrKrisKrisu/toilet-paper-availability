@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="py-5 text-center">
            <h1><i class="fas fa-toilet-paper"></i></h1>
            <h2>Klopapier Verfügbarkeit</h2>
            <p class="lead">Keine Panik! Es stehen
                noch {{number_format(\App\Models\Store::all()->sum('currentStock'), 0, ",", ".")}} Packungen
                Toilettenpapier zur Verfügung.</p>
        </div>

        <div class="row">
            <div class="col-md-12">
                @include('map')
            </div>
        </div>
    </div>
@endsection
