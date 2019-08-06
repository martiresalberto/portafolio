<aside class="main-sidebar bg-black elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
      
      <span class="brand-text font-weight-light" style="color:yellow;"><strong>PortaFolio</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    
        <div class="info">
          <a class="d-block" style="color:white; list-style: none;">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <router-link to="/admin" class="nav-link">
              <i class="nav-icon fas fa-home yellow"></i>
              <p style="color:white;">
                Admin
              </p>
            </router-link>
          </li>
          
          <li class="nav-item">
            <router-link to="/miperfil" class="nav-link">
              <i class="nav-icon fas fa-user-edit yellow"></i>
              <p style="color:white;">
                Mi perfil
              </p>
            </router-link>
          </li>

          <li class="nav-item">
            <router-link to="/habilidades" class="nav-link">
              <i class="nav-icon fas fa-running yellow"></i>
              <p style="color:white;">
                Habilidades
              </p>
            </router-link>
          </li>

          <li class="nav-item">
            <router-link to="/miportafolio" class="nav-link">
              <i class="nav-icon fas fa-address-book yellow"></i>
              <p style="color:white;">
                Portafolio
              </p>
            </router-link>
          </li>

          <li class="nav-item">
            <router-link to="/acercademi" class="nav-link">
              <i class="nav-icon fas fa-user-tag yellow"></i>
              <p style="color:white;">
                Acerca de mi
              </p>
            </router-link>
          </li>
    
          <li class="nav-item">
            <router-link to="/certificaciones" class="nav-link">
              <i class="nav-icon fas fa-sticky-note yellow"></i>
              <p style="color: white;">
                Certificaciones
              </p>
            </router-link>
          </li>
          
        <li class="nav-item">

        <a class="nav-link" href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          <i class="nav-icon fas fa-power-off red"></i>
          <p style="color: white;">Logout</p>
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
