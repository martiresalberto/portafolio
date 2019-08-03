<template>

<div class="container">
  <div class="row">
    
    <div class="col-lg-6 mt-4">
      <div class="card card-primary card-outline">
      <div class="card-header">
        <h5 class="m-0">Mi perfil</h5>
      </div>
      <div class="card-body">
        <h6 class="card-title">administra o edita tu perfil</h6>
          <router-link to="/miperfil" class="btn btn-primary">
          <i class="nav-icon fas fa-user-edit yellow"></i> 
            Entrar
          </router-link>
      </div>
      </div>
    </div>
    <!-- /.col-md-6 -->
              
    <div class="col-lg-6 mt-4">
      <div class="card card-primary card-outline">
        <div class="card-header">
          <h5 class="m-0">Habilidades</h5>
        </div>
        <div class="card-body">
          <h6 class="card-title">administra o edita tus habilidades</h6>
           <router-link to="/habilidades" class="btn btn-primary">
            <i class="nav-icon fas fa-running yellow"></i> 
             Entrar
          </router-link>
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
        <router-link to="/miportafolio" class="btn btn-primary">
          <i class="nav-icon fas fa-address-book yellow"></i> 
            Entrar
        </router-link>
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
         <router-link to="/acercademi" class="btn btn-primary">
          <i class="nav-icon fas fa-user-tag yellow"></i> 
           Entrar
        </router-link>
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
         <router-link to="/certificaciones" class="btn btn-primary">
          <i class="nav-icon fas fa-sticky-note yellow"></i> 
            Entrar
        </router-link>
      </div>
    </div>
    </div>

  </div>
</div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
