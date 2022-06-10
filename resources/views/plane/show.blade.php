@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Plane show') }}</div>
                    <div class="card-body">
                        @auth
                           <p>
                               {{ $plane->id }}
                               {{ $plane->refuel_time }}
                               {{ $plane->passengers }}
                               {{ $plane->jet }}
                               {{ $plane->propeller }}
                               {{ $plane->created_at }}
                               {{ $plane->updated_at }}
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
