@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Flight show') }}</div>
                    <div class="card-body">
                        @auth
                           <p>
                               {{ $flight->id }}
                               {{ $flight->number }}
                               {{ $flight->start_time }}
                               {{ $flight->landing_time }}
                           </p>
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
