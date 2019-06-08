<template>
    
    <div class="container mt-4">

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Mi Perfil</h3>

        

      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover">
          <tbody><tr>
            <th>Id</th>
            <th>name</th>
            <th>emil</th>
            <th>imgPerfil</th>
            <th>Editar</th>
          </tr>
          
          <tr v-for="pro in perfil" :key="pro.id">
            <td>{{ pro.id }}</td>
            <td>{{ pro.name }}</td>
            <td>{{ pro.email }}</td>
            <td>{{ pro.imgPerfil }}</td>
          <td>
              <a href="#" @click="editModal(pro)">
                  <i class="fas fa-edit blue"></i>
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
        <h5 class="modal-title" v-show="!editmode" id="addNewLabel">Agregar Perfil</h5>
        <h5 class="modal-title" v-show="editmode" id="addNewLabel">Editar Perfil</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
      
      <form @submit.prevent="editmode ? updatePerfil() : crearPerfil()">
      
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
            v-model="form.email"
            class="form-control"
            type="text" 
            placeholder="email" 
            name="email" 
            :class="{ 'is-invalid': form.errors.has('email') }" 
            rows="3">
         </textarea>
         <has-error :form="form" field="email"></has-error>
      </div>


      <div class="form-group">
        <label for="imgPerfil">imgPerfil</label>
        <input type="file" @change="updateimgPerfil" name="imgPerfil" class="form-input">
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button v-show="editmode" type="submit" class="btn btn-dark">Editar Perfil</button>
        <button v-show="!editmode" type="submit" class="btn btn-dark">Crear Perfil</button>
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
      perfil : {},
      form: new Form({
        id: '',
        name: '',
        email: '',
        password: '',
        imgPerfil: ''
      })
    }
  }, 
methods: {
  updateimgPerfil(e){
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
  },
  updatePerfil(){
     // console.log('editando la categoria');
    this.$Progress.start();
    // console.log('Editing data');    
    this.form.put('api/perfil/'+this.form.id)
    .then(()=>{
       //succes
      $('#addNew').modal('hide');
       Swal.fire(
        'Updated!',
        'Perfil has been Updated.',
        'success'
       )
       this.$Progress.finish();
       Fire.$emit('AfterCreated');                    
    })
    .catch(()=>{
      this.$Progress.fail();   
    });   
  },
  editModal(pro){
    this.editmode = true;
    this.form.reset();
    $('#addNew').modal('show');
    this.form.fill(pro);
  },
  loadPerfil(){
     axios.get("api/perfil").then(({ data }) => (this.perfil = data.data));
  },
  crearPerfil(){
     this.$Progress.start();
                
      this.form.post('api/perfil')
      .then(()=>{
      Fire.$emit('AfterCreated'); 
    
      $('#addNew').modal('hide')
     
      toast({
          type: 'success',
          title: 'Perfil created in successfully'
        })

      this.$Progress.finish();
      
      })
      .catch(()=>{
        
      })
      
  }
},
created() {
     this.loadPerfil();
     Fire.$on('AfterCreated',()=> {
          this.loadPerfil();
     });
     // setInterval(() => this.loadCategory(), 3000);
   }
}
</script>

