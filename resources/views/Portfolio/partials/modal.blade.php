<!-- Modal de portafolio -->
@foreach($products as $product)

<div class="modal fade" id="product{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Portafolio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--Main layout-->
      

            <!--Grid row-->
            <div class="row">

              <!--Grid column-->
              <div class="col-md-5">

                <img src="images/portafolio/{{ $product->imgProducto }}"  class="img-fluid" alt="">

              </div>
              <!--Grid column-->
              <div class="col-md-7">


              <p class="lead">
                <span>Q{{ $product->price }}</span>
              </p>
                
               <p class="lead font-weight-bold">{{ $product->name }}</p>

               
               <p class="font-weight-bold">Description</p>

              <p>{{ $product->description }}</p>


              <a href="{{ $product->url }}"><p class="lead font-weight-bold">Ver pagina: {{ $product->url }}</p></a>
             
              <br>
            
              <p class="lead font-weight-bold" style="color:blue;">Estado: {{ $product->estado }}</p>

              </div>  


            </div>
            <!--Grid row-->


        <!--Main layout-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Regresar</button>
      </div>
    </div>
  </div>
</div>
<!-- termina modal de portafolio -->
@endforeach