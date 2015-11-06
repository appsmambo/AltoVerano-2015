@extends("layouts/master")
@section('contenido')
<div class="row main">
	<div class="col-xs-10 col-xs-offset-1">
		<div class="row borde">
			<div class="col-xs-12">
				<p class="bloque tu-look center-block text-center">
					TU<span>LOOK</span><br>
					<small>POR<span>MENOS</span></small>
				</p>
				<div class="row grid">
					<div class="col-xs-6">
						<a href="#" class="abrir-look categorias" data-bloque="#look-aziz">
							<img src="{{url('img/tu-look-por-menos/1-lista.jpg')}}" alt="" class="img-responsive center-block" />
							<span></span>
						</a>
					</div>
					<div class="col-xs-6">
						<a href="#" class="abrir-look categorias" data-bloque="#look-brigittenaux">
							<img src="{{url('img/tu-look-por-menos/2-lista.jpg')}}" alt="" class="img-responsive center-block" />
							<span></span>
						</a>
					</div>
				</div>
				<div class="row grid">
					<div class="col-xs-6">
						<a href="#" class="abrir-look categorias" data-bloque="#look-marquis">
							<img src="{{url('img/tu-look-por-menos/3-lista.jpg')}}" alt="" class="img-responsive center-block" />
							<span></span>
						</a>
					</div>
					<div class="col-xs-6">
						<a href="#" class="abrir-look categorias" data-bloque="#look-navigata">
							<img src="{{url('img/tu-look-por-menos/4-lista.jpg')}}" alt="" class="img-responsive center-block" />
							<span></span>
						</a>
					</div>
				</div>
				<div class="row grid">
					<div class="col-xs-6">
						<a href="#" class="abrir-look categorias" data-bloque="#look-tatienne">
							<img src="{{url('img/tu-look-por-menos/5-lista.jpg')}}" alt="" class="img-responsive center-block" />
							<span></span>
						</a>
					</div>
					<div class="col-xs-6">
						<a href="#" class="abrir-look categorias" data-bloque="#look-barbados">
							<img src="{{url('img/tu-look-por-menos/6-lista.jpg')}}" alt="" class="img-responsive center-block" />
							<span></span>
						</a>
					</div>
				</div>
				<div class="row grid">
					<div class="col-xs-6">
						<a href="#" class="abrir-look categorias" data-bloque="#look-index">
							<img src="{{url('img/tu-look-por-menos/7-lista.jpg')}}" alt="" class="img-responsive center-block" />
							<span></span>
						</a>
					</div>
				</div>
				<p class="hidden-xs">
					<br>
				</p>
				<a href="{{url('top-5-del-verano')}}" class="bloque tu-look-por-menos center-block text-center">
					TOP <span>5</span> DEL <span>VERANO</span>
					<small>
						Haz clic y encuentra tu <span>look del verano</span> <br class="visible-xs"> a precios increíbles
					</small>
				</a>
				<a href="http://modaripley.com/sandaliasripley/" class="bloque para-elegir-mas center-block text-center" target="_blank">
					elige <span>TU</span> accesorio ideal: SANDALIAS
				</a>
			</div>
		</div>
	</div>
</div>
@stop
@section('contenido-dinamico')
@foreach ($looks as $look)
<div id="look-{{$look->marca}}" class="prenda">
	<img src="{{url('img/tu-look-por-menos/'.$look->id.'-detalle.jpg')}}" alt="">
	<div class="detalle look">
		<img src="{{url('img/marcas/look/'.$look->marca.'.png')}}" alt="" class="logo-marca">
		LOOK AHORA<br>
		<span class="text-center"><small>s/.</small>{{$look->precio}}</span>
		<small class="antes">look antes s/. {{$look->precio_antes}}</small>
	</div>
	<p class="lista-prenda">
		{{$look->prenda1}} <span>{{$look->sku1}}</span> | {{$look->prenda2}} <span>{{$look->sku2}}</span>
	</p>
</div>
@endforeach
@stop