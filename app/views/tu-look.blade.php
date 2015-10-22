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
						<a href="#" class="abrir-look categorias" data-bloque="#look-azis">
							<img src="{{url('img/tu-look-por-menos/1-lista.jpg')}}" alt="" class="img-responsive center-block" />
							<span></span>
						</a>
					</div>
					<div class="col-xs-6">
						<a href="#" class="abrir-look categorias" data-bloque="#look-azis">
							<img src="{{url('img/tu-look-por-menos/2-lista.jpg')}}" alt="" class="img-responsive center-block" />
							<span></span>
						</a>
					</div>
				</div>
				<div class="row grid">
					<div class="col-xs-6">
						<a href="#" class="abrir-look categorias" data-bloque="#look-azis">
							<img src="{{url('img/tu-look-por-menos/3-lista.jpg')}}" alt="" class="img-responsive center-block" />
							<span></span>
						</a>
					</div>
					<div class="col-xs-6">
						<a href="#" class="abrir-look categorias" data-bloque="#look-azis">
							<img src="{{url('img/tu-look-por-menos/4-lista.jpg')}}" alt="" class="img-responsive center-block" />
							<span></span>
						</a>
					</div>
				</div>
				<div class="row grid">
					<div class="col-xs-6">
						<a href="#" class="abrir-look categorias" data-bloque="#look-azis">
							<img src="{{url('img/tu-look-por-menos/5-lista.jpg')}}" alt="" class="img-responsive center-block" />
							<span></span>
						</a>
					</div>
					<div class="col-xs-6">
						<a href="#" class="abrir-look categorias" data-bloque="#look-azis">
							<img src="{{url('img/tu-look-por-menos/6-lista.jpg')}}" alt="" class="img-responsive center-block" />
							<span></span>
						</a>
					</div>
				</div>
				<div class="row grid">
					<div class="col-xs-6">
						<a href="#" class="abrir-look categorias" data-bloque="#look-azis">
							<img src="{{url('img/tu-look-por-menos/7-lista.jpg')}}" alt="" class="img-responsive center-block" />
							<span></span>
						</a>
					</div>
				</div>
				<p class="hidden-xs">
					<br>
				</p>
				<p class="bloque tu-look-por-menos center-block text-center">
					TU <span>LOOK</span> POR <span>MENOS</span>
					<small>
						¡Elige tu <span>look del verano</span> a precios increíbles
					</small>
				</p>
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