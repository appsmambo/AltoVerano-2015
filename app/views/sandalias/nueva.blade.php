@extends("layouts/master")
@section('estilos')
<link href="{{url('css/sandalias.css')}}" rel="stylesheet">
@stop
@section('menu')
<a href="{{url('sandalias/nueva-temporada')}}" class="active">
	nueva temporada
</a>
<a href="{{url('sandalias/ninos')}}">
	niños
</a>
<a href="{{url('sandalias/accesorios')}}" >
	accesorios
</a>
<a href="{{url('sandalias/sandalias-por-menos')}}">
	sandalias por menos
</a>
@stop
@section('contenido')
<div class="row main">
	<div class="col-md-10 col-md-offset-1 ">
		<div class="row borde">
			<div class="col-md-12 ">
				<p class="bloque tu-look center-block text-center sandalias-menos">
					NUEVA
					<small>TEMPO<span>RADA</span></small>
				</p>
				<div id="minimal" class="row">
					<div class="col-md-3 accesorios-slider-banner">
						<p class="marca">
							<img src="{{url('img/nueva-temporada/minimal.png')}}" alt="" class="img-responsive">
							<br>
							#YOELIJO<br> 
							SER ATREVIDA<br>
							El recomendado<br>
							Palazzo + Loafer + Bucket Bag
						</p>
					</div>
					<div class="col-md-9 accesorios-slider-content">
						<span id="prev-minimal" class="atras"></span>
						<span id="next-minimal" class="siguiente"></span>
						<ul class="bxslider-minimal">
							<li>
								<a href="#" class="abrir-layer" data-bloque="#maxidress-1">
									<img src="{{url('img/nueva-temporada/marquis-1.jpg')}}" alt="" class="center-block" />
								</a>
							</li>
							<li>
								<a href="#" class="abrir-layer" data-bloque="#maxidress-1">
									<img src="{{url('img/nueva-temporada/marquis-2.jpg')}}" alt="" class="center-block" />
								</a>
							</li>
							<li>
								<a href="#" class="abrir-layer" data-bloque="#maxidress-1">
									<img src="{{url('img/nueva-temporada/timechopper-1.jpg')}}" alt="" class="center-block" />
								</a>
							</li>
						</ul>
					</div>
				</div>
				<p>
					<br>
				</p>
				
				<p>
					<br>
				</p>
				<div  class="row grid banner-sandalias-marcas">
					<div class="col-md-6">
						<a href="{{url('sandalias/sandalias-por-menos')}}"><img src="{{url('img/big/ninos.jpg')}}" alt="" class="img-responsive" /></a>
					</div>
					<div class="col-md-6">
						<a href="{{url('sandalias/ninos')}}"><img src="{{url('img/big/index.jpg')}}" alt="" class="img-responsive" /></a>
					</div>
				</div>
				<p class="bloque para-elegir-mas center-block text-center">
					para elegir <span>+</span> visita <span><a href="http://www.ripley.com/" target="_blank">ripley.com</a></span>
				</p>
			</div>
		</div>
	</div>
</div>
@stop
@section('contenido-dinamico')
<div id="maxidress-1" class="prenda">
	<img src="{{url('img/accesorios/prendas/lentes-marquis-1.jpg')}}" alt="">
	<!--div class="detalle">
		Polo Huecos<br>
		1234456<br>
		<span><small>s/.</small>59.90</span>
	</div-->
</div>
@stop