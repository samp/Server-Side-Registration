@extends('layouts.app')

@section('title', 'User Listing')

@section('content')

    <h1>List of Users</h1>

    <ul>
        @foreach($users as $user)
            <li>{{ $user->username }}: {{ $user->url }}</li>
        @endforeach
    </ul>

@endsection