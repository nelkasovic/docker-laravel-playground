@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ $article->title }}</div>
                    <div class="card-body">
                        @auth
                            <form action="{{ action([\App\Http\Controllers\OrderController::class, 'stepTwo']) }}" method="POST">
                                @method('POST')
                                @csrf
                                @foreach($content as $item)
                                    <div class="form-check">
                                        <input class="form-check-input"
                                               type="checkbox"
                                               id="item_{{$item->id}}"
                                               name="items[{{ $item->id }}]">
                                        <label class="form-check-label" for="item_{{$item->id}}">
                                            {{ $item->title }}
                                        </label>
                                    </div>
                                @endforeach
                                <button class="btn btn-primary btn-sm" type="submit">
                                    {{ __('Bestellen') }}
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
