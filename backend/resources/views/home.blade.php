@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('Welcome Back! Glad to see you back.') }}
                    <br />
                    {{ __('We are having some more options for you.') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection