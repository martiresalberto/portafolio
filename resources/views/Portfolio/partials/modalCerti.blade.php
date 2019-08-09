@foreach($certification as $cert)

 <!-- Modal de Certficados -->
<div class="modal fade" id="certificado{{ $cert->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Certficado</h5>
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
                

                <img src="images/certificados/{{ $cert->imgCertificacion}}" class="img-fluid" alt="">

              </div>
              <!--Grid column-->
              <div class="col-md-7">

              <p class="lead font-weight-bold">{{ $cert->name }}</p>

              <p>{{ $cert->description }}</p>

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
<!-- termina modal de Certficados -->

 @endforeach()   