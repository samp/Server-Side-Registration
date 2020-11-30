@extends('layouts.app')

@section('title', 'User Details')

@section('content')

<div class="container">
    <h1>{{ $user->username }}</h1>

    <ul>
        <li>Email: {{ $user->email }}</li>
        <li>Url: {{ $user->url }}</li>
        <li>Date of birth: {{ $user->dob }}</li>
        <li><a>Reset password</a></li>
    </ul>
</div>
@endsection