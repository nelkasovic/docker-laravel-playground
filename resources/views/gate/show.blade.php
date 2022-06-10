@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Gate show') }}</div>
                    <div class="card-body">
                        @auth
                           <p>
                               {{ $gate->id }}
                               {{ $gate->number }}
                               {{ $gate->size_small }}
                               {{ $gate->state_free }}
                               {{ $gate->international }}
                               {{ $gate->created_at }}
                               {{ $gate->updated_at }}
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
