<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free Bootstrap Themes Designed by 365bootstrap.com" />
    <meta name="author" content="http://www.365bootstrap.com" />

    <title>
    @yield('title')
    Portafolio|Martires
    </title>
    

    @section('head')
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
	
	 <!-- Custom Fonts -->
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('http://fonts.googleapis.com/css?family=Shadows+Into+Light') }}" rel='stylesheet' type='text/css'>
	<link href="{{ asset('https://fonts.googleapis.com/css?family=Montserrat:400,700') }}" rel="stylesheet" type="text/css">
	
	<!-- circle Menu -->
	<link rel="stylesheet" href="{{ asset('css/circle-menu.min.css') }}">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
    @show 
</head>

<body>

        
        
     @yield('services')
    
     @yield('Portafolio')
        
     @yield('about')
 
     @yield('contact') 
        
       @include('Portfolio.partials.footer')   

@section('script')
     <!-- jQuery -->
<script src="js/jquery-1.11.3.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/agency.js"></script>

<!-- Plugin JavaScript -->
<script src="js/jquery.easing.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/cbpAnimatedHeader.js"></script>
<script src="js/circleMenu.min.js"></script>
@show

</body>

