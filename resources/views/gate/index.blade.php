@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Gates') }}</div>
                    <div class="card-body">
                        @auth
                            <table class="table table-hover align-bottom">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{ __('Number') }}</th>
                                    <th>{{ __('Size small') }}</th>
                                    <th>{{ __('State free') }}</th>
                                    <th>{{ __('International') }}</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($gates as $gate)
                                    <tr>
                                        <td>{{ $gate->id }}</td>
                                        <td>{{ $gate->number }}</td>
                                        <td>
                                            @if($gate->size_small)
                                                {{ __('Yes') }}
                                            @else
                                                {{ __('No') }}
                                            @endif
                                        </td>
                                        <td>
                                            @if($gate->state_free)
                                                {{ __('Yes') }}
                                            @else
                                                {{ __('No') }}
                                            @endif
                                        </td>
                                        <td>
                                            @if($gate->international)
                                                {{ __('Yes') }}
                                            @else
                                                {{ __('No') }}
                                            @endif
                                        </td>
                                        <td class="text-end">
                                            <form method="post"
                                                  class="d-inline-block"
                                                  action="{{ action([\App\Http\Controllers\GateController::class, 'destroy'], $gate) }}">
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
                                <a href="{{ route('gates.create') }}" class="btn btn-primary">
                                    <i class="las la-plus me-1"></i>
                                    {{ __('Add Gate') }}
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
