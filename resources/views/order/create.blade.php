@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Articles') }}</div>
                    <div class="card-body">
                        @auth
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-hover">
                                        @foreach($articles as $article)
                                            <tr>
                                                <td>
                                                    {{ $article->title }}
                                                </td>
                                                <td>
                                                   {{ $article->price }}
                                                </td>
                                                <td>
                                                    <button class="btn btn-primary btn-sm">
                                                        <i class="las la-plus"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        @endauth

                        @guest
                            <p>Bitte anmelden!</p>
                        @endguest
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Order') }}</div>
                    <div class="card-body">
                        12
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header">{{ __('Order items') }}</div>
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
