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
      
        {{-- <div  style="height:10vh"></div> --}}
        
            <div class="row justify-content-center col-md-8 offset-2">
            
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                               {{-- @if (count($donations) !=0) --}}
                                <table class="table table-striped table-bordered whitebg mt-5">
                                        <thead>
                                            <tr>
                                              <td>S/N</td>
                                              <td>DONATION CATEGORY</td>
                                              <td>DATE</td>
                                              <td>AMOUNT</td>
                                              
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($donations as $index => $donation)
                                            <tr>
                                                <td>{{$index + 1}}</td>
                                                <td>{{$donation->frequency}}</td>
                                                <td>{{$donation->created_at}}</td>
                                                <td>{{$donation->amount}}</td>
                                             
                                            </tr>
                                            @endforeach
                                        </tbody>
                                      </table>
                                {{-- @else --}}
                                {{-- <table class="table col-md-7 whitebg mt-5">
                                        <thead>
                                            <tr>
                                            
                                              <td>DONATION</td>
                                             
                                              
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <tr>
                                                        <td>NO</td>
                                                        
                                                        <td>DONATION</td>
                                                        <td>YET</td>
                                                        <td>.</td>
                                                     
                                                    </tr>
                                        </tbody>
                                      </table> --}}
                                {{-- @endif --}}
                            
                                <div>
                            </div>
                               
      

        @endsection
   
</body>
</html>