<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free Bootstrap Themes Designed by 365bootstrap.com" />
    <meta name="author" content="http://www.365bootstrap.com" />

   <title>Portafolio|Martires Alberto</title>
  
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
   
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
	
 
</head>

<body style="overflow-x:hidden;">
     
     @yield('services')
    
     @yield('Portafolio')
        
     @yield('about')
 
     @yield('certification')

     @yield('contact') 
   
     @include('Portfolio.partials.footer')   


     <!-- jQuery -->
<script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{ asset('js/agency.js') }}"></script>

<!-- Plugin JavaScript -->
<script src="{{ asset('js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('js/classie.js') }}"></script>
<script src="{{ asset('js/cbpAnimatedHeader.js') }}"></script>



</body>

