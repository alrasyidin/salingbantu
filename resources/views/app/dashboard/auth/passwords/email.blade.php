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
                            {{ __('Reset Password') }}
                        </p>
                    </div>
                    <div class="login--form">
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="form-group">
                                <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="form-group">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Send Password Reset Link') }}
                                    </button>
                                </div>
                        </form>
                    </div>
                </div>
            </div><!-- end .col-md-6 -->
        </div><!-- end .row -->
    </div><!-- end .container -->
</section>
@endsection
