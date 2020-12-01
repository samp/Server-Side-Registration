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
                            <br>
                            <div class="form-group row">
                                <label for="username" class="col-md-4 col-form-label text-md-right">Username:</label>
                                    <div class="col-md-6">
                                    <input type="text" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" required name="username" id="username">
                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password:</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" required name="password" id="password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Email:</label>
                                <div class="col-md-6">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required name="email" id="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="url" class="col-md-4 col-form-label text-md-right">Webpage URL:</label>
                                <div class="col-md-6">
                                    <input type="url" class="form-control @error('url') is-invalid @enderror" value="{{ old('url') }}"  name="url" id="url">
                                    @error('url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="dob" class="col-md-4 col-form-label text-md-right">Date of birth:</label>
                                <div class="col-md-6">
                                    <input type="date" class="form-control @error('dob') is-invalid @enderror" value="{{ old('dob') }}" max="2002-12-31" required name="dob" id="dob">
                                    @error('dob')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4 col-form-label text-md-right"></div>
                                <div class="col-md-6">
                                    <div class="form-control @error('g-recaptcha-response') is-invalid @enderror" style="background-image: none; height:auto">
                                        <div class="g-recaptcha" id="g-recaptcha" name="g-recaptcha" style="margin:auto" data-sitekey="{{ env('RECAPTCHA_SITEKEY')  }}"></div>
                                    </div>
                                    @error("g-recaptcha-response")
                                        <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                    @enderror
                                </div>
                            </div>
                           
                        </fieldset>
                        <br>
                        <div class="form-group row mb-0">
                            <div style="margin:auto">
                                <button type="submit" name="submit" style="margin:auto" formnovalidate class="btn btn-primary">Submit details</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection