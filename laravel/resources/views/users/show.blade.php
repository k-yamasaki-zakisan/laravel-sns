@extends('app')

@section('title', $user->name)

@section('content')
    @include('nav')
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <div class="d-flex flex-row">
                    <a href="{{ route('users.show', ['name' => $user->name]) }}" class="text-dark">
                        <i class="fas fa-user-circle fa-3x"></i>
                    </a>
                    <h2 class="h5 card-title m-0">
                        <a href="{{ route('users.show', ['name' => $user->name]) }}" class="text-dark">
                            {{ $user->name }}
                        </a>
                    </h2>
                </div>
            </div>
            <div class="card-body">
                <div class="card-text">
                    <a href="" class="text-muted">
                        10フォロー
                    </a>
                    <a href="" class="text-muted">
                        10フォロわー
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection