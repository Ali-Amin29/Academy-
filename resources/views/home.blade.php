@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('fff') }}</div>

                <div class="card-body">
                    @if (session('status')) s
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are loggfffed in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
