@extends('layouts.app')
<body>
        @extends('layouts._nav')
        @section('button')
        <button class="navbar-toggler mr-auto ml-4 dashboardbutton" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mt-4 border-top"  id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav align-items-center" style="height:100vh">
                    <li class="nav-item mt-5 mb-5">
                    
                        <a href="{{ route('donation.index') }}"><button type="button" class="btn dashboardbutton fixedwidth">
                        {{ __('DASHBOARD') }}</button> </a>
                    </li>
                    <li class="nav-item  mt-5 mb-5">
                
                        <a href="{{ route('donation.create') }}"><button type="button" class="btn dashboardbutton fixedwidth">
                                {{ __('DONATE') }}</button> </a>
                    </li>
                    <li class="nav-item  mt-5">
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><button type="button" class="btn dashboardbutton fixedwidth">
                                {{ __('LOGOUT') }}</button></a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf
                                </form>
                    </li>
                </ul>
            </div> 
        @endsection
        @section('content')
        <div class="row col-md-8 offset-2 border-bottom m-2 redbg">
            <div class="row justify-content-center">
                    
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                    
                        <div class="white p-3"><h5>Note: Give Monthly sets up for you ‘Regular Giving’:
                            a recurring Monthly debit on your payment-card as 
                            sign-on to Action Aids’s Social Justice support to the 
                            Rights of : Women & safe city, child & Girl’s to 
                            Education. Psychosocial support to displaced
                            victims of insurgences Relief in emergencies and
                            Building resilience of rural communities <br> <br>
                            While: Give Once is a ‘One-off’ Donation
                        </h5>
                      </div>
            </div>
            
            <div class="column mb-2" style="background-color:aliceblue">

                <form method="POST" action="{{ route('donation.store') }}">
                    @csrf
                          <div class="btn-group btn-group-toggle row col-md-12 mt-4 mb-4 justify-content-center" data-toggle="buttons">
                                  <label for="frequency" class="btn Lfixedwidth mr-5">
                                    <input type="radio" class="form-control" name="frequency" id="once" autocomplete="off" value="Give Once">Give Once</h5>
                                  </label>
                                  <label for="frequency" class="btn Lfixedwidth ml-5">
                                    <input type="radio" class="form-control" name="frequency" id="monthly" autocomplete="off" value= "Give Monthly">Give Monthly</h5>
                                  </label>
                          </div>
                          <div class="btn-group btn-group-toggle row col-md-12 mt-4 mb-4 justify-content-center" data-toggle="buttons">
                                  <label  for="amount" class="btn fixedwidth2 mr-2">
                                    <input type="radio" class="form-control" name="amount" id="1" autocomplete="off" value="2000"> NGN 2,000
                                  </label>
                                  <label for="amount" class="btn fixedwidth2 mr-2">
                                    <input type="radio" class="form-control" name="amount" id="2" autocomplete="off" value= "3000"> NGN 3,000
                                  </label>
                                  <label for="amount" class="btn fixedwidth2 mr-2 ">
                                      <input type="radio" class="form-control" name="amount" id="3" autocomplete="off" value= "5000"> NGN 5,000
                                  </label>
                                  <label for="amount" class="btn fixedwidth2">
                                      <input type="radio" class="form-control" name="amount" id="4" autocomplete="off" value= "10000"> NGN 10,000
                                  </label>
                          </div>
                         
                    <div class="row mb-2 mt-4">
                        <div class="col-md-2 offset-md-5 ">
                        <button class="btn redbg justify-content-center" type='submit'>
                                {{ __('DONATE') }}</button>
                              </div>
                              </div>
                </form>
                </div>
        </div>
                      
                
     

        @endsection
      
</body>
</html>