@extends('layouts.admin.dashboard')
@section('title','Dashboard')
@section('main-content')
<section class="section">
    <div class="section-header">
        <h1>{{ __('Verify Your Email Address') }}</h1>
    </div>
    <div class="section-body">
        <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                    <h4>{{ __('Oopsss !!') }}</h4>
                </div>
            <div class="card-body">
                @if (session('resent'))
                <div class="alert alert-success" role="alert">
                    {{ __('A fresh verification link has been sent to your email address.') }}
                </div>
                @endif

                {{ __('Before proceeding, please check your email for a verification link.') }}
                {{ __('If you did not receive the email') }}, <a
                    href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
            </div>
        </div>
        </div>
                        </div>
                    </div>
    </div>

</section>
@endsection
