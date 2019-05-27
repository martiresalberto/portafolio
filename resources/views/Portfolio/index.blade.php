@extends('Portfolio.template')

@section('head')
 @parent
@stop

@include('Portfolio.partials.nav') 

@section('services')
<!-- ////////////Services -->
        <section class="box-content " id="services">
            <div class="container" style="margin-top: 20px;">
                <div class="row heading">
                     <div class="col-lg-12">
                        <h2>Mis Habilidades</h2>
                        <hr class="line02">
                        <div class="intro">FRONT-END | BACK-END</div>
                    </div>
                </div>

            
                <div class="row">
                @foreach($services as $service)  
                    <div class="col-sm-4 services-item">
                        <div class="wrap-img">
                            <img src="{{ $service->image}}">
                        </div>
                        <h3 class="services-heading">{{ $service->name }}</h3>
                        <p>{{ $service->description }}</p>
                        
                    </div>
                @endforeach()
                </div>
             
            </div>
        </section>
        
       
@stop

@section('Portafolio')
<!-- ////////////Portfolio -->
        <section class="box-content box-style" id="portfolio">
            <div class="container">
                <div class="row heading">
                     <div class="col-lg-12">
                        <h2>Mi Portafolio</h2>
                        <hr class="line01">
                        <div class="intro">PAGINAS | PLANTILLAS</div>
                    </div>
                </div>
                <div class="row">

                    @foreach($products as $product)

                   <div class="col-md-3 col-sm-6 portfolio-item">
                        <a href="{{ Route('detalle-portafolio', $product->slug )}}" class="portfolio-link" data-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-eye fa-3x"></i>
                                </div>
                            </div>
                            <img src="{{ $product->image }}" class="img-responsive" alt="">
                        </a>
                        
                    </div>
                    @endforeach()
                    
                </div>
            </div>
        </section>
        
@stop

@section('about')

<!-- ////////////About -->
        <section class="box-content" id="about">
            <div class="container">
                <div class="row center">
                    <div class="col-md-6">
                    @foreach($abouts as $about)
                        <div class="wrap-img">
                            <img src="{{ $about->image }}">
                        </div>
                        <ul class="list-inline social-buttons">
                            
                            <li><a href="https://www.facebook.com/alberto.orozco.56679"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="https://github.com/martiresalberto"><i class="fa fa-github"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <div class="row heading">
                            <h3>Martires Alberto Orozco</h3>
                            <hr class="line02">
                            <div class="intro">{{ $about->name }}</div>
                        </div>
                        <div class="row">
                            <p>{{ $about->description }}</p>
                        </div>
                    @endforeach()
                    </div>
                </div>
            </div>
        </section>
        
@stop


{{-- @section('pricing')

<!-- ////////////Pricing -->
        <section class="box-content" id="pricing">
            <div class="container">
                <div class="row heading">
                     <div class="col-lg-12">    
                        <h2>PERFECT PRICING</h2>
                        <hr class="line02">
                        <div class="intro">Lorem ipsum dolor sit amet</div>
                    </div>
                </div>
                <div class="row pricing-item">
                    <div class="table-responsive">
                        <div class="container">
                            <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>&nbsp </th>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Engine</th>
                                    <th>Displacement</th>
                                    <th>Color</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Yamaha FZ-07</td>
                                    <td>Sport Bike</td>
                                    <td>249cc Single-cylinder</td>
                                    <td>600cc</td>
                                    <td>Green,Balck</td>
                                    <td>20,000</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Superleggera</td>
                                    <td>Standard</td>
                                    <td>250cc Single-cylinder</td>
                                    <td>250cc</td>
                                    <td>Green,Balck</td>
                                    <td>20,000</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Super Duke R</td>
                                    <td>Dual Sport</td>
                                    <td>449cc Single-cylinder</td>
                                    <td>500cc</td>
                                    <td>Yellow,Balck</td>
                                    <td>30,000</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>BMW S 1000 R</td>
                                    <td>Sport Bike</td>
                                    <td>249cc Single-cylinder</td>
                                    <td>250cc</td>
                                    <td>Red,Balck</td>
                                    <td>50,000</td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>  
        

@stop --}}

@section('certification')

<!-- ////////////Portfolio -->

        <section class="box-content box-style" id="portfolio2">
            <div class="container" style="margin-top: 40px;">
                <div class="row heading">
                     <div class="col-lg-12">
                        <h2>Mis Certificaciones</h2>
                        <hr class="line01">
                        <div class="intro">Estas son certificaciones que he adquirido a lo largo del aprendizaje Web</div>
                    </div>
                </div>
                @foreach($Certification as $certificado)
                <div class="row">
                   
                    <div class="col-md-4 col-sm-3 portfolio-item2">
                        <a href="{{ Route('detalle-certificacion', $certificado->slug )}}" class="portfolio-link" data-toggle="modal">
                            
                            <img src="{{ $certificado->image}}" class="img-responsive" alt="">
                        </a>
                        <div class="portfolio-caption center">
                            <h4>{{ $certificado->name}}</h4>
                            
                        </div>
                    </div>
                   @endforeach() 
                    
                </div>
            </div>
        </section>
        
@stop

@section('contact')
<!-- ////////////Contact -->
<section class="box-content box-style" id="contact">
<div class="container">
    <div class="row">
<br>

@if(session()->has('flash'))
  <div class="alert alert-warning alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      {{ session()->get('flash') }}
  </div>
@endif

    <div class="col-lg-12 text-center">
        <div class="row heading">
            <h2>Contactame</h2>
            <hr class="line01">
            <div class="intro">Las mejores cosas en la vida no son cosas</div>
        </div>
    </div>


    <div class="col-md-6 contact-item">
        <div class="row">
            <div class="col-sm-12">
            
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d123536.65268311882!2d-90.56260126824222!3d14.626375695534955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8589a180655c3345%3A0x4a72c7815b867b25!2sGuatemala!5e0!3m2!1ses!2ses!4v1507921393836" width="95%"  frameborder="0" style="border:0" allowfullscreen></iframe>
                <br>
                <br>
                <p>Guatemala , Guatemala.</p>
                <p>martiresalbertoorozcogonzalez@gmail.com</p>
            
            </div>
        </div>
    </div>
    <div class="col-md-6 contact-item">

{!! Form::open(['route' => 'messages', 'method' => 'POST']) !!}

{{ csrf_field() }}

<div class="row">
<div class="col-md-6">
    <div class="form-group">
   
    {!!Form::text('name',null,['required' => 'required','placeholder'=> 'Nombre y apellido'])!!}
              
    </div>
    <div class="form-group">
              
    {!!Form::text('email',null,['required' => 'required','placeholder'=> 'Email'])!!}

    </div>

    <div class="form-group">
              
    {!!Form::text('subject',null,['required' => 'required','placeholder'=> 'Subject'])!!}

    </div>
 
 </div>

<div class="col-md-6">
    <div class="form-group">
            
    {!! Form::textarea('body',null,['class'=>'form-control','required' => 'required','placeholder'=>'Mensaje']) !!}
    
    </div>
</div>

</div>
    
    <div class="row">
            <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button type="submit" class="btn btn-l">Enviar Mensaje</button>
            </div>
    </div>

{!!Form::close()!!}
    </div>
</div>
</div>
</section>



@stop




@section('script')
  @parent
@stop