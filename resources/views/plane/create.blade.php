@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Plane create') }}</div>
                    <div class="card-body">
                        @auth
                            <form action="{{ route('planes.store') }}" method="post">
                                @csrf
                                @method('POST')
                                <div class="mb-3">
                                    <label for="passengers"
                                           class="form-label">{{ __('Passengers') }}</label>
                                    <input type="number"
                                           class="form-control"
                                           id="passengers"
                                           name="passengers"
                                           required
                                           aria-describedby="passengersHelp">
                                    <div id="passengersHelp" class="form-text">
                                        {{ __('Help for passengers if needed') }}
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="refuel_time"
                                           class="form-label">{{ __('Refuel time') }}</label>
                                    <input type="number"
                                           step="0.1"
                                           class="form-control"
                                           id="refuel_time"
                                           name="refuel_time"
                                           required
                                           aria-describedby="refuelTimeHelp">
                                    <div id="refuelTimeHelp" class="form-text">
                                        {{ __('Help for refuel time if needed') }}
                                    </div>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox"
                                           class="form-check-input"
                                           name="jet"
                                           id="jet">
                                    <label class="form-check-label"
                                           for="jet">
                                        {{ __('Jet') }}
                                    </label>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox"
                                           class="form-check-input"
                                           name="propeller"
                                           id="propeller">
                                    <label class="form-check-label"
                                           for="propeller">
                                        {{ __('Propeller') }}
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
