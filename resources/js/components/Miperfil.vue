<template>
<div class="container-fluid mt-4">
<div class="row">

<div class="col-md-11">
    <div class="card">
      
      <div class="card-body">


        <div class="card">
    
      <div class="card-body box-profile">
        <div class="text-center">
          <img class="profile-user-img img-fluid img-circle" :src="getProfilePhoto()" alt="User profile picture">
        </div>

        <h3 class="profile-username text-center">{{this.form.name}}</h3>

        <p class="text-muted text-center">Software Engineer</p>

      </div>
      <!-- /.card-body -->
</div>   

 <div class="tab-content">

   <div class="tab-pane active show">
   <form class="form-horizontal">
      
           <div class="form-group">
              <label for="inputName" class="col-sm-2 control-label">Name</label>
              <div class="col-sm-10">
                <input type="email" v-model="form.name" class="form-control" id="inputName" placeholder="Name" :class="{ 'is-invalid': form.errors.has('name') }">
                <has-error :form="form" field="name"></has-error>
              </div>
            </div>

          <div class="form-group">
              <label for="inputEmail" class="col-sm-2 control-label">Email</label>

              <div class="col-sm-10">
                <input type="email" v-model="form.email" class="form-control" id="inputEmail" placeholder="Email" :class="{ 'is-invalid': form.errors.has('email') }">
                <has-error :form="form" field="email"></has-error>
              </div>
            </div>

           <div class="form-group">
                  <label for="passpord" class="col-sm-12 control-label">Passport (leave empty if not changing)
                  </label>

                  <div class="col-sm-12">
                      <input type="passpord" v-model="form.password" class="form-control" id="passpord" placeholder="Passport" :class="{ 'is-invalid': form.errors.has('password') }">
                      <has-error :form="form" field="password"></has-error>
                  </div>
            </div>

              <div class="form-group">
                  <label for="imgPerfil" class="col-sm-2 control-label">ImgPerfil</label>
                  
                  <div class="col-sm-12">
                    <input type="file" @change="updateProfile" class="form-input">
                  </div>
              </div>


              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button @click.prevent="updateInfo" type="submit" class="btn btn-danger">Actualizar</button>
                </div>
              </div>

            </form>
          
          </div>
          <!-- /.tab-pane -->

 </div>
        <!-- /.tab-content -->
 </div><!-- /.card-body -->

</div>
    <!-- /.nav-tabs-custom -->
</div>

</div>
</div>
</template>

<script>
    export default {
        data(){
            return {
                form: new Form({
                  id: '',
                  name : '',
                  email : '',
                  password : '',
                  imgPerfil : ''
                })
            }
        },
        
        mounted() {
            console.log('Component mounted.')
        },
        
        methods:{
            
            getProfilePhoto(){

                let imgPerfil = (this.form.imgPerfil.length > 200) ? this.form.imgPerfil : "images/miperfil/"+ this.form.imgPerfil ;
                return imgPerfil;
            },

            updateInfo(){
                this.$Progress.start();
                this.form.put('api/miperfil')
                .then(()=>{

                    Fire.$emit('AfterCreated');                    
                   this.$Progress.finish();
                })
                .catch(()=>{
                   this.$Progress.fail();
                });
            },
            
            updateProfile(e){
              let file = e.target.files[0];
              // console.log(file);
              let reader = new FileReader();
              // let vm = this;
              if(file['size'] < 2111775){   
                 reader.onloadend = (file) => {
                    // console.log('RESULT', reader.result)
                    this.form.imgPerfil = reader.result;
                 }
                  reader.readAsDataURL(file);
                }else{
                    swal({
                        type: 'error',
                        title: 'Oops...',
                        text: 'You are uploading a large file',
                    })
                }  
            }
        },

        created() {
            axios.get("api/miperfil")
            .then(({ data }) => (this.form.fill(data)));
        }
    }

</script>
