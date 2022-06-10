@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Gate create') }}</div>
                    <div class="card-body">
                        @auth
                            <form action="{{ route('gates.store') }}" method="POST">
                                @csrf
                                @method('POST')
                                <div class="mb-3">
                                    <label for="number"
                                           class="form-label">{{ __('Number') }}</label>
                                    <input type="number"
                                           class="form-control"
                                           id="number"
                                           name="number"
                                           required
                                           aria-describedby="numberHelp">
                                    <div id="numberHelp" class="form-text">
                                        {{ __('Help for number if needed') }}
                                    </div>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox"
                                           class="form-check-input"
                                           name="state_free"
                                           id="state_free">
                                    <label class="form-check-label"
                                           for="state_free">
                                        {{ __('State free') }}
                                    </label>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox"
                                           class="form-check-input"
                                           name="size_small"
                                           id="size_small">
                                    <label class="form-check-label"
                                           for="size_small">
                                        {{ __('Size small') }}
                                    </label>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox"
                                           class="form-check-input"
                                           name="international"
                                           id="international">
                                    <label class="form-check-label"
                                           for="international">
                                        {{ __('International') }}
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary">
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
