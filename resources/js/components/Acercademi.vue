<template>
    
    <div class="container mt-4">

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Acerca de mi</h3>

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
            <th>user_id</th>
            <th>Editar</th>
          </tr>
          
          <tr v-for="ace in acerca" :key="ace.id">
            <td>{{ ace.id }}</td>
            <td>{{ ace.name }}</td>
            <td>{{ ace.description }}</td>
            <td>{{ ace.user_id }}</td>
          <td>
              <a href="#" @click="editModal(ace)">
                  <i class="fas fa-edit blue"></i>
              </a>
              
              <a href="#" @click="deleteAcerca(ace.id)">
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
        <h5 class="modal-title" v-show="!editmode" id="addNewLabel">Agregar Acerca</h5>
        <h5 class="modal-title" v-show="editmode" id="addNewLabel">Editar Acerca</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
      
      <form @submit.prevent="editmode ? updateAcerca() : crearAcerca()">
      
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
            :class="{ 'is-invalid': form.errors.has('description') }">
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
            :class="{ 'is-invalid': form.errors.has('user_id') }">
         </input>
         <has-error :form="form" field="user_id"></has-error>
      </div>

      
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button v-show="editmode" type="submit" class="btn btn-dark">Editar Acerca</button>
        <button v-show="!editmode" type="submit" class="btn btn-dark">Crear Acerca</button>
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
      acerca : {},
      form: new Form({
        id: '',
        name: '',
        description: '',
        user_id: ''
      })
    }
  }, 
methods: {
  updateAcerca(){
     // console.log('editando la categoria');
    this.$Progress.start();
    // console.log('Editing data');    
    this.form.put('api/acercademi/'+this.form.id)
    .then(()=>{
       //succes
      $('#addNew').modal('hide');
       Swal.fire(
        'Updated!',
        'Acerca de mi has been Updated.',
        'success'
       )
       this.$Progress.finish();
       Fire.$emit('AfterCreated');                    
    })
    .catch(()=>{
      this.$Progress.fail();   
    });   
  },
  editModal(ace){
    this.editmode = true;
    this.form.reset();
    $('#addNew').modal('show');
    this.form.fill(ace);
  },
  newModal(){
    this.editmode = false;
    this.form.reset();
    $('#addNew').modal('show');
  },
  deleteAcerca(id){
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
       this.form.delete('api/acercademi/'+id).then(()=>{
       Swal.fire(
        'Deleted!',
        'Your Acerca de mi has been deleted.',
        'success'
        )
        Fire.$emit('AfterCreated'); 

        }).catch(()=>{
             swal("Failed!", "There was something wronge.", "warning");
        });
      }
    }) 
  }, 
  loadAcerca(){
     axios.get("api/acercademi").then(({ data }) => (this.acerca = data.data));
  },
  crearAcerca(){
     this.$Progress.start();
                
      this.form.post('api/acercademi')
      .then(()=>{
      Fire.$emit('AfterCreated'); 
    
      $('#addNew').modal('hide')
     
      toast({
          type: 'success',
          title: 'Acerca de mi created in successfully'
        })

      this.$Progress.finish();
      
      })
      .catch(()=>{
        
      })
      
  }
},
created() {
     this.loadAcerca();
     Fire.$on('AfterCreated',()=> {
          this.loadAcerca();
     });
     // setInterval(() => this.loadCategory(), 3000);
   }
}
</script>

