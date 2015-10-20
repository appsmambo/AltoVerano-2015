@extends("layouts/master")
@section('menu')
<a href="{{url('tu-look-por-menos')}}">
	tu look por menos
</a>
<a href="{{url('nuevas-formas')}}">
	nuevas formas
</a>
@stop
@section('contenido')
<div class="contenedor-fijo">
	<div id="banner" class="nivoSlider">
		<img src="{{url('img/banner/navigata.jpg')}}" alt="" />
		<img src="{{url('img/banner/index.jpg')}}" alt="" />
		<img src="{{url('img/banner/marquis.jpg')}}" alt="" />
		<img src="{{url('img/banner/barbados.jpg')}}" alt="" />
	</div>
	<div class="marcas hidden-xs">
		<span id="slider-prev" class="atras"></span>
		<span id="slider-next" class="siguiente"></span>
		<div class="container-slider center-block">
			<p class="bloque no-me-conformo center-block text-center">
				NO ME CONFORMO CON UNA SOLA <span>MARCA</span>
			</p>
			<ul class="bxslider">
				<li><img src="{{url('img/marcas/only.png')}}" alt="" class="center-block" /></li>
				<li><img src="{{url('img/marcas/river-island.png')}}" alt="" class="center-block" /></li>
				<li><img src="{{url('img/marcas/la-dolfina.png')}}" alt="" class="center-block" /></li>
				<li><img src="{{url('img/marcas/tennis.png')}}" alt="" class="center-block" /></li>
			</ul>
		</div>
	</div>
</div>
<div class="clearfix"></div>
<div class="row main">
	<div class="col-lg-10 col-lg-offset-1">
		<div class="row borde">
			<div class="col-md-12">
				<div class="row grid">
					<div class="col-sm-6">
						<a href="{{url('nuevas-formas')}}#maxi-dress">
							<img src="{{url('img/categorias/maxi-dress.jpg')}}" alt="" class="img-responsive center-block" />
						</a>
					</div>
					<div class="col-sm-6">
						<a href="{{url('nuevas-formas')}}#palazos">
							<img src="{{url('img/categorias/palazos.jpg')}}" alt="" class="img-responsive center-block" />
						</a>
					</div>
				</div>
				<div class="row grid">
					<div class="col-sm-6">
						<a href="{{url('nuevas-formas')}}#sexy-top">
							<img src="{{url('img/categorias/sexy-top.jpg')}}" alt="" class="img-responsive center-block" />
						</a>
					</div>
					<div class="col-sm-6">
						<a href="{{url('nuevas-formas')}}#enteritos">
							<img src="{{url('img/categorias/enteritos.jpg')}}" alt="" class="img-responsive center-block" />
						</a>
					</div>
				</div>
				<div class="row grid">
					<div class="col-sm-6">
						<a href="{{url('nuevas-formas')}}#shorts">
							<img src="{{url('img/categorias/shorts.jpg')}}" alt="" class="img-responsive center-block" />
						</a>
					</div>
					<div class="col-sm-6">
						<img src="{{url('img/categorias/marquis.jpg')}}" alt="" class="img-responsive center-block" />
					</div>
				</div>
				<div class="row grid">
					<div class="col-sm-12">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe src="https://www.youtube.com/embed/zJThH-DXMkw" class="embed-responsive-item"></iframe>
						</div>
					</div>
				</div>
				<h2 class="text-center">
					MIRA Y <span>ELIGE TU LOOK!</span> Todas nuestras marcas en todas sus formas, elige las tuyas.
				</h2>
				<p class="bloque tu-look-por-menos center-block text-center">
					TU <span>LOOK</span> POR <span>MENOS</span>
					<small>
						¡Elige tu <span>look de verano</span> por menos de <span class="precio">S/.150!</span>
					</small>
				</p>
			</div>
		</div>
	</div>
</div>
@stop