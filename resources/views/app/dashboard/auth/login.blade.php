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
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    @if(session()->has('login_error'))
                    <div class="alert alert-danger">
                        {{ session()->get('login_error') }}
                    </div>
                    @endif
                    <div class="cardify login">
                        <div class="login--header">
                            <h3>Welcome Back</h3>
                            <p>You can sign in with your username</p>
                        </div><!-- end .login_header -->
                        <div class="login--form">
                            <div class="form-group">
                                <label for="user_name">Username</label>
                                <input id="identity" type="text"
                                    class="form-control @error('identity') is-invalid @enderror" name="identity"
                                    value="{{ old('identity') }}" required autocomplete="identity" autofocus>
                                @error('identity')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="pass">Password</label>

                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="custom_checkbox">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label for="ch2">
                                        <span class="shadow_checkbox"></span>
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                            <button class="btn btn--md btn-primary" type="submit">Login Now</button>
                            <div class="login_assist">
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                </p>
                            @endif

                                <p class="signup">Don't have an
                                    <a href="{{ route('register') }}">account</a>?</p>
                            </div>
                        </div><!-- end .login--form -->
                    </div><!-- end .cardify -->
                </form>
            </div><!-- end .col-md-6 -->
        </div><!-- end .row -->
    </div><!-- end .container -->
</section>
@endsection
