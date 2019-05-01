@extends('layouts.app')
<body class="redbg">
    <div class="border">
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
    </div>
        @section('content')
      
        <div  style="height:40vh"></div>
            <div class="row justify-content-center">
            
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                        <h5>WELCOME!</h5> 
                    
            </div>
            <div class="row justify-content-center">
                <h5>To get started, click on the menu bar.</h5> 
            </div>
      

        @endsection
   
</body>
</html>