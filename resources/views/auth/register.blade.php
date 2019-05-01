@extends('layouts.app')
<body>
        <div class ="row container">
            @extends('layouts._nav')
            @section('content')
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 offset-md-2" >
                        
                            <div class=" col-md-6 offset-md-2"><h4>{{ __('SignUp') }}</h4></div>
                            <p class="col-md-8 mt-2"><h5>{{_('Already have an account? Then please')}} <a href="{{ route('login') }}">{{ __('Login') }}</a></h5></p>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="form-group column">
                                        <label for="firstname" class="col-md-4 col-form-label asterick col-md-3">{{ __('First Name') }}</label>
                                        
                                        <div class="col-md-6">
                                            <input id="firstname" placeholder= "FIRST NAME" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

                                            @error('firstname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group column">
                                    
                                        <label for="lastname" class=" col-form-label asterick col-md-3">{{ __('Last Name') }}</label>
                                    
                                        <div class="col-md-6">
                                            <input id="lastname" placeholder= "LAST NAME" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                                            @error('lastname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group column">
                                        <label for="email" class="col-md-4 col-form-label asterick col-md-3">{{ __('E-Mail Address') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" placeholder="EMAIL ADDRESS" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <p class="col-md-6">{{_('We recommend you use your work e-mail')}}</p>
                                    </div>

                                    <div class="form-group column">
                                        <label for="password" class="col-md-4 col-form-label asterick col-md-3t">{{ __('Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" placeholder="PASSWORD" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group column">
                                        <label for="password-confirm" class="col-md-4 asterick col-form-label col-md-3">{{ __('Confirm Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" placeholder="CONFIRM PASSWORD" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-2">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Sign Up') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                        
                    
                
                </div>
            </div>
            @endsection
            </div>
        </body>
        </html>
