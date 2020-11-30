@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Welcome') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in! Welcome, ') }} {{ $user->username }}
                    <br><br>

                    @can ('viewAny', User::class))
                        <a href="{{ url('users') }}">{{ __('Continue') }}</a>
                    @else
                        <a href="{{ url('users/'.$user->username) }}">{{ __('Continue') }}</a>
                    @endcan
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
