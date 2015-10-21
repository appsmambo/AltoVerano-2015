@extends("layouts/master")
@section('menu')
<a href="{{url('tu-look-por-menos')}}" class="active">
	tu look por menos
</a>
<a href="{{url('nuevas-formas')}}">
	nuevas formas
</a>
@stop
@section('contenido')
<div class="row main">
	<div class="col-lg-10 col-lg-offset-1">
		<div class="row borde">
			<div class="col-sm-12">
				<p class="bloque tu-look center-block text-center">
					TU<span>LOOK</span><br>
					<small>POR<span>MENOS</span></small>
				</p>
				<div class="row grid">
					<div class="col-sm-6">
						<a href="#"  class="abrir-look" data-bloque="#look-azis">
							<img src="{{url('img/tu-look-por-menos/look-azis.jpg')}}" alt="" class="img-responsive center-block" />
						</a>
					</div>
					<div class="col-sm-6">
						<a href="#" data-bloque="#look-azis">
							<img src="{{url('img/tu-look-por-menos/look-brigitte-naux.jpg')}}" alt="" class="img-responsive center-block" />
						</a>
					</div>
				</div>
				<div class="row grid">
					<div class="col-sm-6">
						<a href="#" data-bloque="#look-azis">
							<img src="{{url('img/tu-look-por-menos/look-marquis.jpg')}}" alt="" class="img-responsive center-block" />
						</a>
					</div>
					<div class="col-sm-6">
						<a href="#" data-bloque="#look-azis">
							<img src="{{url('img/tu-look-por-menos/look-navigata.jpg')}}" alt="" class="img-responsive center-block" />
						</a>
					</div>
				</div>
				<div class="row grid">
					<div class="col-sm-6">
						<a href="#" data-bloque="#look-azis">
							<img src="{{url('img/tu-look-por-menos/look-barbados.jpg')}}" alt="" class="img-responsive center-block" />
						</a>
					</div>
					<div class="col-sm-6">
						<a href="#" data-bloque="#look-azis">
							<img src="{{url('img/tu-look-por-menos/look-index.jpg')}}" alt="" class="img-responsive center-block" />
						</a>
					</div>
				</div>
				<p>
					<br>
				</p>
				<p class="bloque tu-look-por-menos center-block text-center">
					TU <span>LOOK</span> POR <span>MENOS</span>
					<small>
						¡Elige tu <span>look de verano</span> por menos de <span class="precio">S/.150!</span>
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