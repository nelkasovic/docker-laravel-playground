@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Articles') }}</div>
                    <div class="card-body">
                        @auth
                            <ul>
                                @foreach($articles as $article)
                                    <li>{{ $article->title }}</li>
                                @endforeach
                            </ul>
                            <button class="btn btn-sm btn-primary">
                                {{ __('Weiter...') }}
                            </button>
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
