@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('429') }}</div>

                    <div class="card-body">
                        <h1 class="h1 text-center">Too many requests</h1>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
