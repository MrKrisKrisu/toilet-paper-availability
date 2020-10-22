@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="py-5 text-center">
            <h1>Impressum</h1>
            <a href="/">Zurück zur Startseite</a>
            <p>Angaben gemäß § 5 TMG</p>
            <p>{{ config('app.imprint.name') }} <br>
                {{ config('app.imprint.address') }}<br>
                {{ config('app.imprint.city') }} <br>
            </p>
            <p><strong>Kontakt:</strong> <br>
                Telefon: {{ config('app.imprint.phone') }}<br>
                Fax: {{ config('app.imprint.fax') }}<br>
                E-Mail: {{ config('app.imprint.email') }}<br/></p>

            <a href="/">Zurück zur Startseite</a>
        </div>

    </div>
@endsection
