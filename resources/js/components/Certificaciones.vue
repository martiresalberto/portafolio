<template>
    
    <div class="container mt-4">

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Mis certificaciones</h3>

        <div class="card-tools"> 
           <button class="btn btn-danger" @click="newModal">Agregar<i class="fas fa-file-alt fa-fw"></i></button>
        </div>

      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover">
          <tbody><tr>
            <th>Id</th>
            <th>name</th>
            <th>description</th>
            <th>imgCertificacion</th>
            <th>Usuario</th>
            <th>Editar</th>
          </tr>
          
          <tr v-for="cert in certificado" :key="cert.id">
            <td>{{ cert.id }}</td>
            <td>{{ cert.name }}</td>
            <td>{{ cert.description }}</td>
            <td>{{ cert.imgCertificacion }}</td>
            <td>{{ cert.user_id }}</td>
          <td>
              <a href="#" @click="editModal(cert)">
                  <i class="fas fa-edit blue"></i>
              </a>
              
              <a href="#" @click="deleteCertificado(cert.id)">
                  <i class="fas fa-trash red"></i>
              </a>
          </td>
          </tr>
        </tbody>
      </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="addNew" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" v-show="!editmode" id="addNewLabel">Agregar Certificado</h5>
        <h5 class="modal-title" v-show="editmode" id="addNewLabel">Editar Certificado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
      
      <form @submit.prevent="editmode ? updateCertificado() : crearCertificado()">
      
      <div class="form-group">
         <input 
          v-model="form.name" 
          type="text" 
          name="name" 
          placeholder="name" 
          class="form-control" 
          :class="{ 'is-invalid': form.errors.has('name') }">
          <has-error :form="form" field="name"></has-error>
      </div>

      <div class="form-group">
         <textarea 
            v-model="form.description"
            class="form-control"
            type="text" 
            placeholder="description" 
            name="description" 
            :class="{ 'is-invalid': form.errors.has('description') }" 
            rows="3">
         </textarea>
         <has-error :form="form" field="description"></has-error>
      </div>

      <div class="form-group">
         <input 
            v-model="form.user_id"
            class="form-control"
            type="text" 
            placeholder="user_id" 
            name="user_id" 
            :class="{ 'is-invalid': form.errors.has('user_id') }" 
            rows="3">
         </input>
         <has-error :form="form" field="user_id"></has-error>
      </div>

      <div class="form-group">
        <label for="imgCertificacion">imgCertificacion</label>
        <input type="file" @change="updateimgCertificacion" name="imgCertificacion" class="form-input">
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button v-show="editmode" type="submit" class="btn btn-dark">Editar Certificado</button>
        <button v-show="!editmode" type="submit" class="btn btn-dark">Crear Certificado</button>
      </div>

      </form> 
      </div>

    </div>
  </div>
</div>

</div>
</template>

<script>
export default {
data () {
    return {
      editmode: false,
      certificado : {},
      form: new Form({
        id: '',
        name: '',
        description: '',
        imgCertificacion:'',
        user_id: ''
      })
    }
  }, 
methods: {
  updateimgCertificacion(e){
    let file = e.target.files[0];
    // console.log(file);
    let reader = new FileReader();
    // let vm = this;
    if(file['size'] < 2111775){   
       reader.onloadend = (file) => {
          // console.log('RESULT', reader.result)
          this.form.imgCertificacion = reader.result;
       }
        reader.readAsDataURL(file);
      }else{
          swal({
              type: 'error',
              title: 'Oops...',
              text: 'You are uploading a large file',
          })
      }  
  },
  updateCertificado(){
     // console.log('editando la categoria');
    this.$Progress.start();
    // console.log('Editing data');    
    this.form.put('api/certificado/'+this.form.id)
    .then(()=>{
       //succes
      $('#addNew').modal('hide');
       Swal.fire(
        'Updated!',
        'Certificado has been Updated.',
        'success'
       )
       this.$Progress.finish();
       Fire.$emit('AfterCreated');                    
    })
    .catch(()=>{
      this.$Progress.fail();   
    });   
  },
  editModal(cert){
    this.editmode = true;
    this.form.reset();
    $('#addNew').modal('show');
    this.form.fill(cert);
  },
  newModal(){
    this.editmode = false;
    this.form.reset();
    $('#addNew').modal('show');
  },
  deleteHabilidad(id){
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
 
    if (result.value) {
       this.form.delete('api/certificado/'+id).then(()=>{
       Swal.fire(
        'Deleted!',
        'Your Certificado has been deleted.',
        'success'
        )
        Fire.$emit('AfterCreated'); 

        }).catch(()=>{
             swal("Failed!", "There was something wronge.", "warning");
        });
      }
    }) 
  }, 
  loadCertificado(){
     axios.get("api/certificado").then(({ data }) => (this.certificado = data.data));
  },
  crearCertificado(){
     this.$Progress.start();
                
      this.form.post('api/certificado')
      .then(()=>{
      Fire.$emit('AfterCreated'); 
    
      $('#addNew').modal('hide')
     
      toast({
          type: 'success',
          title: 'Certificado created in successfully'
        })

      this.$Progress.finish();
      
      })
      .catch(()=>{
        
      })
      
  }
},
created() {
     this.loadCertificado();
     Fire.$on('AfterCreated',()=> {
          this.loadCertificado();
     });
     // setInterval(() => this.loadCategory(), 3000);
   }
}
</script>

