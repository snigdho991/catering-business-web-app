
<!doctype html>
<html lang="en">

    <head>
            
        <meta charset="utf-8" />
        <title>@yield('title') - {{ config('app.name') }}</title>
        
        <meta name="csrf-token" content="{{ csrf_token() }}"> 
        @include('libs.meta-tags')

        @include('libs.styles')
        @yield('styles')

    </head>

    <body data-sidebar="dark">
        <div id="app">
            @if (url()->current() != url('/inbox'))
                <div style="display: none !important;"><chat :user="{{ auth()->user() }}"></chat></div>
            @endif

            @if(Auth::check())

                <audio id="noty_audio">                    
                  <source src="{{ asset('audio/notify.mp3') }}">
                  <source src="{{ asset('audio/notify.oog') }}">
                  <source src="{{ asset('audio/notify.wav') }}">
                </audio>       

                <audio id="noty_audio_two">                    
                  <source src="{{ asset('audio/notify.mp3') }}">
                  <source src="{{ asset('audio/notify.oog') }}">
                  <source src="{{ asset('audio/notify.wav') }}">
                </audio>              
            
            @endif 

            <!-- <body data-layout="horizontal" data-topbar="dark"> -->

            <!-- Begin page -->
            
            <div id="layout-wrapper">
                
                @include('includes.header')

                
                <!-- ========== Left Sidebar Start ========== -->
                @include('includes.left-sidebar')
                <!-- Left Sidebar End -->           

                <!-- ========================== Main Content ==================================== -->
                <div class="main-content">

                    @yield('content')
                    @include('includes.footer')

                </div>
                <!-- end main content-->

            </div>

            <!-- END layout-wrapper -->

                <!-- Right Sidebar -->
                @include('includes.right-themes')
                <!-- /Right-bar -->

            <!-- Right bar overlay-->
            <div class="rightbar-overlay"></div>
        </div>
        
        <!-- JAVASCRIPT -->
        @include('libs.scripts')
        @yield('scripts')

    </body>

</html>
