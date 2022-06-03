@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Airports') }}</div>
                    <div class="card-body">
                        @auth
                            @foreach($airports as $airport)
                                <p>Airport: {{ $airport->name }}</p>
                            @endforeach
                        @endauth

                        @guest
                            <p>Bitte anmelden!</p>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
