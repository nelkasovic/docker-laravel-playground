@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Planes') }}</div>
                    <div class="card-body">
                        @auth
                            <table class="table table-hover align-bottom">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{ __('Passengers') }}</th>
                                    <th>{{ __('Refuel time') }}</th>
                                    <th>{{ __('Jet') }}</th>
                                    <th>{{ __('Propeller') }}</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($planes as $plane)
                                    <tr>
                                        <td>{{ $plane->id }}</td>
                                        <td>{{ $plane->passengers }}</td>
                                        <td>{{ $plane->refuel_time }}</td>
                                        <td>
                                            @if($plane->jet)
                                                {{ __('Yes') }}
                                            @else
                                                {{ __('No') }}
                                            @endif
                                        </td>
                                        <td>
                                            @if($plane->propeller)
                                                {{ __('Yes') }}
                                            @else
                                                {{ __('No') }}
                                            @endif
                                        </td>
                                        <td class="text-end">
                                            <form method="post"
                                                  class="d-inline-block"
                                                  action="{{ action([\App\Http\Controllers\PlaneController::class, 'destroy'], $plane) }}">
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
                                <a href="{{ route('planes.create') }}" class="btn btn-primary">
                                    <i class="las la-plus me-1"></i>
                                    {{ __('Add Plane') }}
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
