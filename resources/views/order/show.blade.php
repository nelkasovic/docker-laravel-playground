@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Order show') }}</div>
                    <div class="card-body">
                        @auth
                           <p>
                               {{ $order->id }}
                               {{ $order->created_at }}
                               {{ $order->updated_at }}
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
