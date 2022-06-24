@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Orders') }}</div>
                    <div class="card-body">
                        @auth
                            <table class="table table-hover align-bottom">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{ __('Created date') }}</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->created_at }}</td>
                                        <td class="text-end">
                                            <form method="post"
                                                  action="{{ action([\App\Http\Controllers\OrderController::class, 'destroy'], $order) }}"
                                                  class="d-inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm">
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
                                <a href="{{ route('orders.create') }}" class="btn btn-primary">
                                    <i class="las la-plus me-1"></i>
                                    {{ __('Add Order') }}
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
