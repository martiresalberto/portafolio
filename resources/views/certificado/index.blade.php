@extends('certificado.template')

@section('head')
 @parent
@stop

@include('Portfolio.partials.nav2') 

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