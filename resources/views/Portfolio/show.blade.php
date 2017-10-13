@extends('Portfolio.template')

@section('head')
@parent
@stop

@include('Portfolio.partials.nav2')

@section('Portafolio')
<div class="container text-center">
	<div class="page-header" style="margin-top: 12%;">
	  <h3><i class="fa fa-shopping-cart"></i> Detalles de la Pagina</h3>
	</div>

	<div class="row" style="margin-top: 10%;">
		<div class="col-md-6">
			<div class="product-block">
				<img src="{{ $product->image }}">
			</div>	
		</div>
		<div class="col-md-6">
			<div class="product-block">
				<h3>{{ $product->name }}</h3><hr>
				<div class="product-info panel">
					<p>{{ $product->description }}</p>
					<h3>
						<span class="label label-success">Precio: ${{ number_format($product->price,2) }}</span>
					</h3>
					
				</div>
			</div>	
		</div>
	</div><hr>

	<p>
		<a class="btn btn-primary" href="{{ route('home') }}">
			<i class="fa fa-chevron-circle-left"></i> Regresar
		</a>
	</p>
</div>
@stop