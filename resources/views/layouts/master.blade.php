
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
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
    </li>
    
  </ul>  

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
      <img src="images/foto martires.png" alt="PortafolioLogo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">PortaFolio</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="images/14.jpg" class="img-circle elevation-2" alt="Martires Alberto">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-home yellow"></i>
              <p>
                Muro
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cogs yellow"></i>
              <p>
                Habilidades
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cogs yellow"></i>
              <p>
                Portafolio
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cogs yellow"></i>
              <p>
                Acerca de mi
              </p>
            </a>
          </li>
    
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cogs yellow"></i>
              <p>
                Certificaciones
              </p>
            </a>
          </li>

          <li class="nav-item">

        <a class="nav-link" href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          <i class="nav-icon fas fa-power-off red"></i>
          {{ __('Logout') }}
        </a>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
           @csrf
         </form>

        </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          
          <div class="col-lg-6 mt-4">
            
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Habilidades</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">administra o edita tus habilidades</h6>
                <a href="#" class="btn btn-primary"> Entrar</a>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->

          <div class="col-lg-6 mt-4">
            
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Portafolio</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Administra o edita tu Portafolio</h6>

                <a href="#" class="btn btn-primary"> Entrar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Acerca de mi</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Administra o edita tu informacion</h6>

                <a href="#" class="btn btn-primary"> Entrar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Certificaciones</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Administra o edita tus certificaciones</h6>

                <a href="#" class="btn btn-primary"> Entrar</a>
              </div>
            </div>
          </div>

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2019 <a href="">Portafolio Martires Alberto</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<script src="/js/app.js"></script>

</body>
</html>
