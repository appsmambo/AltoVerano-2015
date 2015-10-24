@extends("layouts/master")
@section('contenido')
<div class="row main">
	<div class="col-xs-10 col-xs-offset-1">
		<div class="row borde">
			<div class="col-xs-12">
				<p class="bloque nuevas-formas center-block text-center">
					TOP 5<br>
					<span>DEL</span><span>VERANO</span>
				</p>
				<div class="contenedor-nuevas-formas">
					<div id="maxi-dress" class="top5">
						<div class="container">
							<h2 class="visible-xs visible-sm text-center">
								maxi dress
								<span class="boton" data-bloque="#slider-maxi-dress"></span>
							</h2>
							<div id="slider-maxi-dress" class="row slider">
								<div class="col-sm-3 hidden-xs top5-categorias">
									<p class="marca">
										<img src="{{url('img/maxi-dress.png')}}" alt="" class="img-responsive">
										<br>
										El incondicional.<br>
										Escote o cuello halter, estampado o color entero,<br>
										con volantes o camisero…<br>
										Las opciones son infinitas.<br>
										¡Elige el tuyo!
									</p>
								</div>
								<div class="col-xs-12 col-sm-9 top5-imagenes">
									<span id="prev-maxidress" class="atras"></span>
									<span id="next-maxidress" class="siguiente"></span>
									<ul class="bxslider-maxidress">
										@foreach ($listaMaxidress as $prenda)
										<li>
											<a href="#" class="abrir-layer" data-bloque="#maxidress-{{$prenda->codigo}}">
												<img src="{{url('img/nuevas-formas/'.$prenda->codigo.'-lista.jpg')}}" alt="" class="center-block" />
											</a>
										</li>
										@endforeach
									</ul>
								</div>
							</div>
						</div>
					</div>
					<p><br></p>
					<div id="palazos" class="top5">
						<div class="container">
							<h2 class="visible-xs visible-sm text-center">
								PALAZZOS
								<span class="boton" data-bloque="#slider-palazzos"></span>
							</h2>
							<div id="slider-palazzos" class="row slider">
								<div class="col-sm-3 hidden-xs top5-categorias">
									<p class="marca">
										<img src="{{url('img/palazos.png')}}" alt="" class="img-responsive">
										<br>
										Cómodo, fresco, femenino<br>
										e inevitablemente effortless.<br>
										Un look relajado y agradable para las calurosas tardes de verano.
									</p>
								</div>
								<div class="col-xs-12 col-sm-9 top5-imagenes">
									<span id="prev-palazos" class="atras"></span>
									<span id="next-palazos" class="siguiente"></span>
									<ul class="bxslider-palazos">
										@foreach ($listaPalazzos as $prenda)
										<li>
											<a href="#" class="abrir-layer" data-bloque="#palazzos-{{$prenda->codigo}}">
												<img src="{{url('img/nuevas-formas/'.$prenda->codigo.'-lista.jpg')}}" alt="" class="center-block" />
											</a>
										</li>
										@endforeach
									</ul>
								</div>
							</div>
						</div>
					</div>
					<p><br></p>
					<div id="sexy-top" class="top5">
						<div class="container">
							<h2 class="visible-xs visible-sm text-center">
								sexy top
								<span class="boton" data-bloque="#slider-sexy-top"></span>
							</h2>
							<div id="slider-sexy-top" class="row slider">
								<div class="col-sm-3 hidden-xs top5-categorias">
									<p class="marca">
										<img src="{{url('img/sexy-top.png')}}" alt="" class="img-responsive">
										<br>
										Shoulder off, crop top o de espalda descubierta. Existen miles de posibilidades para combinarlos, pruébalas todas<br>
										y elige el ideal para ti.
									</p>
								</div>
								<div class="col-xs-12 col-sm-9 top5-imagenes">
									<span id="prev-sexy-top" class="atras"></span>
									<span id="next-sexy-top" class="siguiente"></span>
									<ul class="bxslider-sexy-top">
										@foreach ($listaSexytop as $prenda)
										<li>
											<a href="#" class="abrir-layer" data-bloque="#sexytop-{{$prenda->codigo}}">
												<img src="{{url('img/nuevas-formas/'.$prenda->codigo.'-lista.jpg')}}" alt="" class="center-block" />
											</a>
										</li>
										@endforeach
									</ul>
								</div>
							</div>
						</div>
					</div>
					<p><br></p>
					<div id="enteritos" class="top5">
						<div class="container">
							<h2 class="visible-xs visible-sm text-center">
								enteritos
								<span class="boton" data-bloque="#slider-enteritos"></span>
							</h2>
							<div id="slider-enteritos" class="row slider">
								<div class="col-sm-3 hidden-xs top5-categorias">
									<p class="marca">
										<img src="{{url('img/enteritos.png')}}" alt="" class="img-responsive">
										<br>
										Versátil, práctico y muy femenino, es la prenda<br>
										esencial de este verano.<br>
										Puedes llevarlo casual o informal, depende de los accesorios.
									</p>
								</div>
								<div class="col-xs-12 col-sm-9 top5-imagenes">
									<span id="prev-enteritos" class="atras"></span>
									<span id="next-enteritos" class="siguiente"></span>
									<ul class="bxslider-enteritos">
										@foreach ($listaEnteritos as $prenda)
										<li>
											<a href="#" class="abrir-layer" data-bloque="#enteritos-{{$prenda->codigo}}">
												<img src="{{url('img/nuevas-formas/'.$prenda->codigo.'-lista.jpg')}}" alt="" class="center-block" />
											</a>
										</li>
										@endforeach
									</ul>
								</div>
							</div>
						</div>
					</div>
					<p><br></p>
					<div id="shorts" class="top5">
						<div class="container">
							<h2 class="visible-xs visible-sm text-center">
								shorts
								<span class="boton" data-bloque="#slider-shorts"></span>
							</h2>
							<div id="slider-shorts" class="row slider">
								<div class="col-sm-3 hidden-xs top5-categorias">
									<p class="marca">
										<img src="{{url('img/shorts.png')}}" alt="" class="img-responsive">
										<br>
										Alargan las piernas,<br>
										marcan la cintura y son<br>
										el clásico de todos los veranos. Los favoritos de la playa ahora invaden la ciudad. La vida es short, disfrútala.
									</p>
								</div>
								<div class="col-xs-12 col-sm-9 top5-imagenes">
									<span id="prev-shorts" class="atras"></span>
									<span id="next-shorts" class="siguiente"></span>
									<ul class="bxslider-shorts">
										@foreach ($listaShorts as $prenda)
										<li>
											<a href="#" class="abrir-layer" data-bloque="#shorts-{{$prenda->codigo}}">
												<img src="{{url('img/nuevas-formas/'.$prenda->codigo.'-lista.jpg')}}" alt="" class="center-block" />
											</a>
										</li>
										@endforeach
									</ul>
								</div>
							</div>
						</div>
					</div>
					<p class="hidden-xs"><br></p>
				</div>
				<a href="{{url('tu-look-por-menos')}}" class="bloque tu-look-por-menos center-block text-center">
					TU <span>LOOK</span> POR <span>MENOS</span>
					<small>
						Haz clic y encuentra tu <span>look del verano</span> <br class="visible-xs"> a precios increíbles
					</small>
				</a>
				<!--p class="bloque para-elegir-mas center-block text-center">
					para elegir <span>+</span> visita <span><a href="http://www.ripley.com/" target="_blank">ripley.com</a></span>
					elige <span>TU</span> accesorio ideal: SANDALIAS
				</p-->
			</div>
		</div>
	</div>
</div>
@stop
@section('contenido-dinamico')
@foreach ($listaMaxidress as $lista)
<div id="maxidress-{{$lista->codigo}}" class="prenda">
	<img src="{{url('img/nuevas-formas/'.$lista->codigo.'-detalle.jpg')}}" alt="">
	<div class="detalle">
		<img src="{{url('img/marcas/top5/'.$lista->marca.'.png')}}" alt="" class="logo-marca">
@foreach ($detalleMaxidress as $prenda)
@if ($lista->codigo == $prenda->codigo)
		{{$prenda->titulo}}<br>
		{{$prenda->sku}}<br>
		<span><small>s/.</small>{{$prenda->precio}}</span>
@endif
@endforeach
	</div>
</div>
@endforeach

@foreach ($listaPalazzos as $lista)
<div id="palazzos-{{$lista->codigo}}" class="prenda">
	<img src="{{url('img/nuevas-formas/'.$lista->codigo.'-detalle.jpg')}}" alt="">
	<div class="detalle">
		<img src="{{url('img/marcas/top5/'.$lista->marca.'.png')}}" alt="" class="logo-marca">
@foreach ($detallePalazzos as $prenda)
@if ($lista->codigo == $prenda->codigo)
		{{$prenda->titulo}}<br>
		{{$prenda->sku}}<br>
		<span><small>s/.</small>{{$prenda->precio}}</span>
@endif
@endforeach
	</div>
</div>
@endforeach

@foreach ($listaSexytop as $lista)
<div id="sexytop-{{$lista->codigo}}" class="prenda">
	<img src="{{url('img/nuevas-formas/'.$lista->codigo.'-detalle.jpg')}}" alt="">
	<div class="detalle">
		<img src="{{url('img/marcas/top5/'.$lista->marca.'.png')}}" alt="" class="logo-marca">
@foreach ($detalleSexytop as $prenda)
@if ($lista->codigo == $prenda->codigo)
		{{$prenda->titulo}}<br>
		{{$prenda->sku}}<br>
		<span><small>s/.</small>{{$prenda->precio}}</span>
@endif
@endforeach
	</div>
</div>
@endforeach

@foreach ($listaEnteritos as $lista)
<div id="enteritos-{{$lista->codigo}}" class="prenda">
	<img src="{{url('img/nuevas-formas/'.$lista->codigo.'-detalle.jpg')}}" alt="">
	<div class="detalle">
		<img src="{{url('img/marcas/top5/'.$lista->marca.'.png')}}" alt="" class="logo-marca">
@foreach ($detalleEnteritos as $prenda)
@if ($lista->codigo == $prenda->codigo)
		{{$prenda->titulo}}<br>
		{{$prenda->sku}}<br>
		<span><small>s/.</small>{{$prenda->precio}}</span>
@endif
@endforeach
	</div>
</div>
@endforeach

@foreach ($listaShorts as $lista)
<div id="shorts-{{$lista->codigo}}" class="prenda">
	<img src="{{url('img/nuevas-formas/'.$lista->codigo.'-detalle.jpg')}}" alt="">
	<div class="detalle">
		<img src="{{url('img/marcas/top5/'.$lista->marca.'.png')}}" alt="" class="logo-marca">
@foreach ($detalleShorts as $prenda)
@if ($lista->codigo == $prenda->codigo)
		{{$prenda->titulo}}<br>
		{{$prenda->sku}}<br>
		<span><small>s/.</small>{{$prenda->precio}}</span>
@endif
@endforeach
	</div>
</div>
@endforeach

@stop