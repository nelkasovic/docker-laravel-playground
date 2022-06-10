@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Flight create') }}</div>
                    <div class="card-body">
                        @auth
                            <form method="post"
                                  action="{{ route('flights.store')  }}">
                                @csrf
                                @method('POST')
                                <div class="mb-3">
                                    <label for="number"
                                           class="form-label">{{ __('Number') }}</label>
                                    <input type="number"
                                           required
                                           class="form-control"
                                           id="number"
                                           name="number"
                                           aria-describedby="numberHelp">
                                    <div id="numberHelp" class="form-text">
                                        {{ __('Help for number if needed') }}
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="start_time"
                                           class="form-label">{{ __('Start time') }}</label>
                                    <input type="datetime-local"
                                           class="form-control"
                                           id="start_time"
                                           name="start_time"
                                           required
                                           aria-describedby="startTimeHelp">
                                    <div id="startTimeHelp" class="form-text">
                                        {{ __('Help for start time if needed') }}
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="landing_time"
                                           class="form-label">{{ __('Landing time') }}</label>
                                    <input type="datetime-local"
                                           class="form-control"
                                           id="landing_time"
                                           name="landing_time"
                                           required
                                           aria-describedby="landingTimeHelp">
                                    <div id="landingTimeHelp" class="form-text">
                                        {{ __('Help for landing time if needed') }}
                                    </div>
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
