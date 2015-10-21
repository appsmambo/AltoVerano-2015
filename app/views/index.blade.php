@extends("layouts/master")
@section('contenido')
<div class="contenedor-fijo">
	<div id="banner" class="nivoSlider">
		<img src="{{url('img/banner/sjp-yo-elijo-verano.jpg')}}" alt="" />
		<img src="{{url('img/banner/yo-elijo-las-mejores-marcas.jpg')}}" alt="" />
		<img src="{{url('img/banner/yo-elijo-navigata.jpg')}}" alt="" />
		<img src="{{url('img/banner/yo-elijo-marquis.jpg')}}" alt="" />
		<img src="{{url('img/banner/yo-elijo-index.jpg')}}" alt="" />
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
	<div class="col-xs-10 col-xs-offset-1">
		<div class="row borde">
			<div class="col-xs-12">
				<div class="row grid">
					<div class="col-xs-6">
						<a href="{{url('nuevas-formas')}}#maxi-dress" class="categorias">
							<img src="{{url('img/categorias/maxi-dress.jpg')}}" alt="" class="img-responsive center-block visible-md visible-lg" />
							<img src="{{url('img/categorias/maxi-dress-mobile.jpg')}}" alt="" class="img-responsive center-block visible-xs" />
							<img src="{{url('img/categorias/maxi-dress-tablet.jpg')}}" alt="" class="img-responsive center-block visible-sm" />
							<span></span>
						</a>
					</div>
					<div class="col-xs-6">
						<a href="{{url('nuevas-formas')}}#palazos" class="categorias">
							<img src="{{url('img/categorias/palazos.jpg')}}" alt="" class="img-responsive center-block visible-md visible-lg" />
							<img src="{{url('img/categorias/palazos-mobile.jpg')}}" alt="" class="img-responsive center-block visible-xs" />
							<img src="{{url('img/categorias/palazos-tablet.jpg')}}" alt="" class="img-responsive center-block visible-sm" />
							<span></span>
						</a>
					</div>
				</div>
				<div class="row grid">
					<div class="col-xs-6">
						<a href="{{url('nuevas-formas')}}#sexy-top" class="categorias">
							<img src="{{url('img/categorias/sexy-top.jpg')}}" alt="" class="img-responsive center-block visible-md visible-lg" />
							<img src="{{url('img/categorias/sexy-top-mobile.jpg')}}" alt="" class="img-responsive center-block visible-xs" />
							<img src="{{url('img/categorias/sexy-top-tablet.jpg')}}" alt="" class="img-responsive center-block visible-sm" />
							<span></span>
						</a>
					</div>
					<div class="col-xs-6">
						<a href="{{url('nuevas-formas')}}#enteritos" class="categorias">
							<img src="{{url('img/categorias/enteritos.jpg')}}" alt="" class="img-responsive center-block visible-md visible-lg" />
							<img src="{{url('img/categorias/enteritos-mobile.jpg')}}" alt="" class="img-responsive center-block visible-xs" />
							<img src="{{url('img/categorias/enteritos-tablet.jpg')}}" alt="" class="img-responsive center-block visible-sm" />
							<span></span>
						</a>
					</div>
				</div>
				<div class="row grid">
					<div class="col-xs-6">
						<a href="{{url('nuevas-formas')}}#shorts" class="categorias">
							<img src="{{url('img/categorias/shorts.jpg')}}" alt="" class="img-responsive center-block visible-md visible-lg" />
							<img src="{{url('img/categorias/shorts-mobile.jpg')}}" alt="" class="img-responsive center-block visible-xs" />
							<img src="{{url('img/categorias/shorts-tablet.jpg')}}" alt="" class="img-responsive center-block visible-sm" />
							<span></span>
						</a>
					</div>
					<div class="col-xs-6">
						<img src="{{url('img/categorias/marquis.jpg')}}" alt="" class="img-responsive center-block visible-md visible-lg" />
						<img src="{{url('img/categorias/marquis-mobile.jpg')}}" alt="" class="img-responsive center-block visible-xs" />
						<img src="{{url('img/categorias/marquis-tablet.jpg')}}" alt="" class="img-responsive center-block visible-sm" />
							<span></span>
					</div>
				</div>
				<div class="row grid">
					<div class="col-xs-12">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe src="https://www.youtube.com/embed/zJThH-DXMkw" class="embed-responsive-item"></iframe>
						</div>
					</div>
				</div>
				<h2 class="text-center hidden-xs">
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