@extends("layouts/sandalias")
@section('contenido')
<div class="row main">
	<div class="col-xs-10 col-xs-offset-1">
		<div class="row borde">
			<div class="col-xs-12">
				<p class="bloque tu-look center-block text-center sandalias-menos">
					SANDALIAS
					<small>POR<span>MENOS</span></small>
				</p>
				<div class="row grid">
					<div class="col-xs-6">
						<a href="#"  >
							<img src="{{url('img/sandalias-por-menos/aziz-1.jpg')}}" alt="" class="img-responsive center-block" />
						</a>
					</div>
					<div class="col-xs-6">
						<a href="#" >
							<img src="{{url('img/sandalias-por-menos/aziz-2.jpg')}}" alt="" class="img-responsive center-block" />
						</a>
					</div>
				</div>
				<div class="row grid">
					<div class="col-xs-6">
						<a href="#" >
							<img src="{{url('img/sandalias-por-menos/index-1.jpg')}}" alt="" class="img-responsive center-block" />
						</a>
					</div>
					<div class="col-xs-6">
						<a href="#">
							<img src="{{url('img/sandalias-por-menos/index-2.jpg')}}" alt="" class="img-responsive center-block" />
						</a>
					</div>
				</div>
				<div class="row grid">
					<div class="col-xs-6">
						<a href="#" >
							<img src="{{url('img/sandalias-por-menos/index-3.jpg')}}" alt="" class="img-responsive center-block" />
						</a>
					</div>
					<div class="col-xs-6">
						<a href="#" >
							<img src="{{url('img/sandalias-por-menos/navigata-1.jpg')}}" alt="" class="img-responsive center-block" />
						</a>
					</div>
				</div>
				<div class="row grid">
					<div class="col-xs-6">
						<a href="#" >
							<img src="{{url('img/sandalias-por-menos/index-4.jpg')}}" alt="" class="img-responsive center-block" />
						</a>
					</div>
					<div class="col-xs-6">
						<a href="#" >
							<img src="{{url('img/sandalias-por-menos/aziz-3.jpg')}}" alt="" class="img-responsive center-block" />
						</a>
					</div>
				</div>
				<div  class="row grid banner-sandalias-marcas">
					<div class="col-xs-6">
						<a href="{{url('sandalias/sandalias-por-menos')}}"><img src="{{url('img/big/ninos.jpg')}}" alt="" class="img-responsive" /></a>
					</div>
					<div class="col-xs-6">
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
<div id="look-azis" class="prenda">
	<img src="{{url('img/tu-look-por-menos/look.jpg')}}" alt="">
	<div class="detalle look">
		<img src="{{url('img/tu-look-por-menos/logo-barbados.png')}}" alt="" class="logo">
		LOOK<br>
		<span><small>s/.</small>149</span>
	</div>
	<p class="lista-prenda">
		Vestido Tejido Jacuard <span>1234567890</span>
	</p>
</div>
@stop