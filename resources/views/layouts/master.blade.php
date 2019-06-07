
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Martires Alberto Orozco</title>

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/css/app.css">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

  <!-- Navbar -->
     @include('admin.partials.nav')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    @include('admin.partials.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

<!-- Main content -->
<div class="content">

 <div class="container-fluid">
    
    <router-view></router-view>
    <vue-progress-bar></vue-progress-bar>    
   
 </div><!-- /.container-fluid -->

</div>
    <!-- /.content -->
</div>
  <!-- /.content-wrapper -->

  

  <!-- Main Footer -->
     @include('admin.partials.footer')

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<script src="/js/app.js"></script>

</body>
</html>
