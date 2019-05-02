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
        <div class="row col-md-8 offset-2 mt-3">
            <div class="row justify-content-center col-md-12 border redbg">
                    
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                           
                    
                        <div class="white p-3"><p>
                                Dear  {{($firstname)}} {{($lastname)}}, your donation is SUCCESSFUL! <br> <br>

                                Please follow the instruction below to generate your receipt. 
                                
                        </p>
                      </div>
            </div>
            @if ($frequency == "Give Monthly")
                <div class="row whitebg col-md-12 border-right border-left border-bottom">


                        <div class=" row col-md-12 mt-4 mb-4 justify-content-center" data-toggle="buttons">
                        <h5> STEP 1<br> <br>Log into your email and click on inbox. Click on the mail from act!onaid <br> <br> <br>
                            STEP 2 <br><br>
                            Click on print receipt <br> <br> <br>
                            STEP 3 <br><br>
                            To give next month, click on the link below print receipt.
                        </h5>

                        </div>
                    
                    
                <div class="row mb-2 mt-4 red col-md-6 offset-3 mb-4">
                    <h5> THANK YOU FOR DONATING</h5>
                    
                            </div>
                            </div>
            @else
            <div class="row whitebg col-md-12 border-right border-left border-bottom">


                    <div class=" row col-md-12 mt-4 mb-4 justify-content-center" data-toggle="buttons">
                    <h5> STEP 1<br> <br>Log into your email and click on inbox. Click on the mail from act!onaid <br> <br> <br>
                        <br><br>
                        <br> <br> <br>
                        STEP 2 <br><br>
                        Click on print receipt


                    </h5>

                    </div>
                
                
            <div class="row mb-2 mt-4 red col-md-6 offset-3 mb-4">
                <h5> THANK YOU FOR DONATING</h5>
                
                        </div>
                        </div>
            @endif
           
                </div>
    
                      
                
     

        @endsection
      
</body>
</html>