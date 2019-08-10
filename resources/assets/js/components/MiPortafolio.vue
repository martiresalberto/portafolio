<template>
    
    <div class="container mt-4">

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Mi Portafolio</h3>

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
            <th>imgProducto</th>
            <th>Url</th>
            <th>price</th>
            <th>user_id</th>
            <th>Editar</th>
          </tr>
          
          <tr v-for="port in portafolio" :key="port.id">
            <td>{{ port.id }}</td>
            <td>{{ port.name }}</td>
            <td>{{ port.description }}</td>
            <td>{{ port.imgProducto }}</td>
            <td>{{ port.url }}</td>
            <td>{{ port.price }}</td>
            <td>{{ port.user_id }}</td>
          <td>
              <a href="#" @click="editModal(port)">
                  <i class="fas fa-edit blue"></i>
              </a>
              
              <a href="#" @click="deletePortafolio(port.id)">
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
        <h5 class="modal-title" v-show="!editmode" id="addNewLabel">Agregar Portafolio</h5>
        <h5 class="modal-title" v-show="editmode" id="addNewLabel">Editar Portafolio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
      
      <form @submit.prevent="editmode ? updatePortafolio() : crearPortafolio()">
      
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
            v-model="form.price"
            class="form-control"
            type="text" 
            placeholder="price" 
            name="price" 
            :class="{ 'is-invalid': form.errors.has('price') }">
         </input>
         <has-error :form="form" field="price"></has-error>
      </div>

      <div class="form-group">
         <input 
            v-model="form.url"
            class="form-control"
            type="text" 
            placeholder="url" 
            name="url" 
            :class="{ 'is-invalid': form.errors.has('url') }">
         </input>
         <has-error :form="form" field="url"></has-error>
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

      <div class="form-group">
        <label for="imgProducto">imgProducto</label>
        <input type="file" @change="updateimgProducto" name="imgProducto" class="form-input">
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button v-show="editmode" type="submit" class="btn btn-dark">Editar Portafolio</button>
        <button v-show="!editmode" type="submit" class="btn btn-dark">Crear Portafolio</button>
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
      portafolio : {},
      form: new Form({
        id: '',
        name: '',
        description: '',
        price: '',
        url:'',
        imgProducto:'',
        user_id: ''
      })
    }
  }, 
methods: {
  updateimgProducto(e){
    let file = e.target.files[0];
    // console.log(file);
    let reader = new FileReader();
    // let vm = this;
    if(file['size'] < 2111775){   
       reader.onloadend = (file) => {
          // console.log('RESULT', reader.result)
          this.form.imgProducto = reader.result;
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
  updatePortafolio(){
     // console.log('editando la categoria');
    this.$Progress.start();
    // console.log('Editing data');    
    this.form.put('api/portafolio/'+this.form.id)
    .then(()=>{
       //succes
      $('#addNew').modal('hide');
       Swal.fire(
        'Updated!',
        'Portafolio has been Updated.',
        'success'
       )
       this.$Progress.finish();
       Fire.$emit('AfterCreated');                    
    })
    .catch(()=>{
      this.$Progress.fail();   
    });   
  },
  editModal(port){
    this.editmode = true;
    this.form.reset();
    $('#addNew').modal('show');
    this.form.fill(port);
  },
  newModal(){
    this.editmode = false;
    this.form.reset();
    $('#addNew').modal('show');
  },
  deletePortafolio(id){
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
       this.form.delete('api/portafolio/'+id).then(()=>{
       Swal.fire(
        'Deleted!',
        'Your portafolio has been deleted.',
        'success'
        )
        Fire.$emit('AfterCreated'); 

        }).catch(()=>{
             swal("Failed!", "There was something wronge.", "warning");
        });
      }
    }) 
  }, 
  loadPortafolio(){
     axios.get("api/portafolio").then(({ data }) => (this.portafolio = data.data));
  },
  crearPortafolio(){
     this.$Progress.start();
                
      this.form.post('api/portafolio')
      .then(()=>{
      Fire.$emit('AfterCreated'); 
    
      $('#addNew').modal('hide')
     
      toast({
          type: 'success',
          title: 'portafolio created in successfully'
        })

      this.$Progress.finish();
      
      })
      .catch(()=>{
        
      })
      
  }
},
created() {
     this.loadPortafolio();
     Fire.$on('AfterCreated',()=> {
          this.loadPortafolio();
     });
     // setInterval(() => this.loadCategory(), 3000);
   }
}
</script>

