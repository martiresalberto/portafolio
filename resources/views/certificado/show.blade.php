@extends('Portfolio.template')

@section('head')
@parent
@stop

@include('Portfolio.partials.nav2')

@section('certification')
<div class="container text-center" style="margin-bottom:3%;">
	<div class="page-header">
	  <h1><i class="fa fa-shopping-cart"></i> Detalle del producto</h1>
	</div>

	<div class="row">
		<div class="col-md-6">
			<div class="product-block">
				<img src="{{ $Certification->image }}" style="width:700px;">
			</div>	
		</div>
		<div class="col-md-6">
			<div class="product-block">
				<h3>{{ $Certification->name }}</h3><hr>
				<div class="product-info panel">
					<p>{{ $Certification->description }}</p>
					
	<p>
	<a class="btn btn-primary" href="{{ route('home') }}">
		<i class="fa fa-chevron-circle-left"></i> Regresar
	</a>
    </p>
				</div>
			</div>	
		</div>
	</div><hr>

	
</div>
@stop