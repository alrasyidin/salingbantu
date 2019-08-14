@extends('layouts.home')
@section('title','Login')
@section('content')
<section class="login_area section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                @if(session()->has('info'))
                <div class="alert alert-primary">
                    {{ session()->get('info') }}
                </div>
                @endif
                @if(session()->has('status'))
                <div class="alert alert-info">
                    {{ session()->get('status') }}
                </div>
                @endif
                <div class="cardify signup_form">
                    <div class="login--header">
                            <h1>{{ __('Verify Your Email Address') }}</h1>
                            <h4>{{ __('Oopsss !!') }}</h4>
                        </p>
                    </div>
                    <div class="login--form">
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
            </div><!-- end .col-md-6 -->
        </div><!-- end .row -->
    </div><!-- end .container -->
</section>
@endsection
