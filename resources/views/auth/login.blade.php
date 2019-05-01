@extends('layouts.app')
<body>
    <div class ="row container">
            @extends('layouts._nav')
        @section('content')
        <div class="container">
            <div class="row mt-5 justify-content-center">
                    <div class="col-md-8 offset-md-2" >
                   
                         <div class=" col-md-6 offset-md-2"><h4>{{ __('Log In') }}</h4></div>
                                <p class="col-md-8 mt-3"><h5 class="red">{{_('Please sign up if you don’t have an account yet.')}}</h5></p>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group column">
                                        <label for="email" class="col-md-4 asterick col-form-label col-md-3">{{ __('E-Mail Address') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="email" placeholder="EMAIL ADDRESS" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    
                                    </div>
            
                                    <div class="form-group column">
                                        <label for="password" class=" asterick col-md-4 col-form-label col-md-3t">{{ __('Password') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="password" placeholder="PASSWORD" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                            <div class="column">
                                <div class="form-group row">
                                    <div class="col-md-5 ">
                                        <div class="form-check">
                                        <label class="form-check-label pr-3 mr-3" for="remember">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('SUBMIT') }}
                                            </button>
            
                                        </div>
                                        
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                                
                                        @if (Route::has('password.request'))
                                        <p>{{_('Forgot Your Password?')}} <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Click here') }}
                                            </a></p>
                                        @endif
                                    </div>
                                    <div>
                                    <a href="{{ route('register') }}"><button type="button" class="btn signupbutton">
                                            {{ __('SIGN UP') }}
                                        </button>
                                    </a>

                                    </div>
                                </div>
                            </div>

                                {{-- <div class="form-group row mb-0">
                                    
                                </div> --}}
                            </form>
                        {{-- </div>
                    </div>
                </div> --}}
            </div>
        </div>
        @endsection
    </div>
</body>
</html>
