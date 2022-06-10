@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Airport create') }}</div>
                    <div class="card-body">
                        @auth
                            <form method="post"
                                  action="{{ route('airports.store') }}">
                                @csrf
                                @method('POST')
                                <div class="mb-3">
                                    <label for="name"
                                           class="form-label">{{ __('Name') }}</label>
                                    <input type="text"
                                           class="form-control"
                                           id="name"
                                           name="name"
                                           required
                                           aria-describedby="nameHelp">
                                    <div id="nameHelp" class="form-text">
                                        {{ __('Help for name if needed') }}
                                    </div>
                                </div>
                                <button class="btn btn-primary">
                                    <i class="las la-save me-1"></i>
                                    {{ __('Save') }}
                                </button>
                            </form>
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
