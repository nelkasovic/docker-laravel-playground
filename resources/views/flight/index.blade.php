@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Flights') }}</div>
                    <div class="card-body">
                        @auth
                            <table class="table table-hover align-bottom">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{ __('Number') }}</th>
                                    <th>{{ __('Start time') }}</th>
                                    <th>{{ __('Landing time') }}</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($flights as $flight)
                                    <tr>
                                        <td>{{ $flight->id }}</td>
                                        <td>{{ $flight->number }}</td>
                                        <td>{{ $flight->start_time }}</td>
                                        <td>{{ $flight->landing_time }}</td>
                                        <td class="text-end">
                                            <form method="post"
                                                  class="d-inline-block"
                                                  action="{{ action([\App\Http\Controllers\FlightController::class, 'destroy'], $flight) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                        class="btn btn-danger btn-sm">
                                                    <i class="las la-trash"></i>
                                                    {{ __('Delete') }}
                                                </button>
                                            </form>
                                            <button class="btn btn-primary btn-sm">
                                                <i class="las la-pencil-alt"></i>
                                                {{ __('Edit') }}
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div>
                                <a href="{{ route('flights.create') }}" class="btn btn-primary">
                                    <i class="las la-plus me-1"></i>
                                    {{ __('Add Flight') }}
                                </a>
                            </div>
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
