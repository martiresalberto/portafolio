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
                        <div class="intro">Lorem ipsum dolor sit amet</div>
                    </div>
                </div>
                @foreach($Certification as $certificado)
                <div class="row">
                   
                    <div class="col-md-3 col-sm-6 portfolio-item2">
                        <a href="{{ Route('detalle-certificacion', $certificado->slug )}}" class="portfolio-link" data-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-eye fa-3x"></i>
                                </div>
                            </div>
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