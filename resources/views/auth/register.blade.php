@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="post" action="{{ route('register') }}">
                        @csrf
                        <fieldset>
                            <legend>Enter your registration details</legend>
                            <div>
                                <label for="username" class="col-md-4 col-form-label text-md-right">Username:</label>
                                <input type="text" required name="username" id="username">
                            </div>
                            <div>
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password:</label>
                                <input type="password" required name="password" id="password">
                            </div>
                            <div>
                                <label for="email" class="col-md-4 col-form-label text-md-right">Email:</label>
                                <input type="email" required name="email" id="email">
                            </div>
                            <div>
                                <label for="url" class="col-md-4 col-form-label text-md-right">Webpage URL:</label>
                                <input type="url" name="url" id="url">
                            </div>
                            <div>
                                <label for="dob" class="col-md-4 col-form-label text-md-right">Date of birth:</label>
                                <input type="date" required name="dob" id="dob">
                            </div>
                        </fieldset>
                        <div><button type="submit" name="submit" formnovalidate class="btn btn-primary">Submit Details</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection