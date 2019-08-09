<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free Bootstrap Themes Designed by 365bootstrap.com" />
    <meta name="author" content="http://www.365bootstrap.com" />

   <title>Portafolio | Alberto Orozco</title>
  
    <script src="{{ asset('https://kit.fontawesome.com/49667e10d3.js') }}"></script>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') }}">
   
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
	
 
</head>

<body style="overflow-x:hidden;">
     
     @yield('services')
    
     @yield('portafolio')
        
     @yield('about')
 
     @yield('certification')

     @yield('contact') 
   
     @include('Portfolio.partials.footer')   


     <!-- jQuery -->
<script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>


<!-- Custom Theme JavaScript -->
<script src="{{ asset('js/agency.js') }}"></script>

<!-- Plugin JavaScript -->
<script src="{{ asset('js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('js/classie.js') }}"></script>
<script src="{{ asset('js/cbpAnimatedHeader.js') }}"></script>


</body>

