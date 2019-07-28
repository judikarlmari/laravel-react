@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="input-cart col s12 m9 push-m1 z-depth-5 grey lighten-5">
            <div class="col s12 m5 login">
                <h4 class="center">Log in</h4>
                <br>
                <form action="check.php" method="post" autocomplete="off">
                    <div class="row">
                        <div class="input-field">
                            <div class="col s12">
                                <input type="text" id="user" name="username" class="validate" required="required" placeholder="{{ __('Username') }}">
                                <label for="user">
                                    <i class="material-icons">person</i>
                                </label>
                            </div>
                        </div>	
                    </div>
                    <div class="row">
                        <div class="input-field">
                            <div class="col s12">
                                <input type="password" id="pass" name="password" class="validate" required="required" placeholder="{{ __('Password') }}">
                                <label for="pass">
                                    <i class="material-icons">lock</i>
                                </label>
                            </div>
                        </div>	
                    </div>
                    <div class="row">
                        <div class="switch col s6">
                            <label>
                                <input type="checkbox">
                                <span class="lever"></span>
                                {{ __('Remember me') }}
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <button type="submit" name="login" class="btn waves-effect waves-light blue right">{{ __('Login') }}</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Signup form -->
            <div class="col s12 m7 signup">
                <div class="signupForm">
                    <h4 class="center">{{ __('Sign up') }}</h4>
                    <br>
                    <form action="" name="signup" method="post" autocomplete="off">
                        <div class="row">
                            <div class="input-field col s12 m6">
                                <input type="text" id="name-picked" name="namepicked" class="validate" required="required" placeholder="{{ __('Enter a username') }}">
                                <label for="name-picked">
                                    <i class="material-icons">person_add</i>       
                                </label>
                            </div>
                            <div class="input-field col s12 m6">
                                <input type="password" id="pass-picked" name="passpicked" class="validate" required="required" placeholder="{{ __('Password') }}">
                                <label for="pass-picked">
                                    <i class="material-icons">lock</i> 
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field email">
                                <div class="col s12">
                                    <input type="text" id="email" name="email" class="validate" required="required" placeholder="{{ __('Enter your email') }}">
                                    <label for="email">
                                        <i class="material-icons">mail</i> 
                                    </label>
                                </div>
                            </div>	
                        </div>
                        <div class="row">
                            <div class="switch col s6">
                                <label>
                                    &nbsp;
                                </label>
                            </div>
                        </div>
                        <div class="row-12">
                            <div class="col s12">
                                <button type="submit" name="btn-signup" class="btn blue right waves-effect waves-light">{{ __('Sign up') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<?/*?>
<form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="group">
                            <input type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <span class="highlight"></span><span class="bar"></span>
                            <label>{{ __('Email') }}</label>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="group">
                            <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            <span class="highlight"></span><span class="bar"></span>
                            <label>{{ __('Password') }}</label>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">

                                <button type="submit" class="button buttonBlue">{{ __('Login') }}
                                    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
<?*/?>