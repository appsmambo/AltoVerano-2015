@extends("layouts/sandalias")
@section('contenido')
<div class="contenedor-fijo">
	<div id="banner" class="nivoSlider">
		<img src="{{url('img/banner/sandalias/summer-2015.jpg')}}" alt="" />
		<img src="{{url('img/banner/yo-elijo-las-mejores-marcas.jpg')}}" alt="" />
		<img src="{{url('img/banner/yo-elijo-navigata.jpg')}}" alt="" />
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
							<img src="{{url('img/categorias/sandalias/minimal.jpg')}}" alt="" class="img-responsive center-block hidden-xs" />
							<img src="{{url('img/categorias/sandalias/minimal-mobile.jpg')}}" alt="" class="img-responsive center-block visible-xs" />
						</a>
					</div>
					<div class="col-xs-6">
						<a href="{{url('nuevas-formas')}}#palazos" class="categorias">
							<img src="{{url('img/categorias/sandalias/gladiadoras.jpg')}}" alt="" class="img-responsive center-block hidden-xs" />
							<img src="{{url('img/categorias/sandalias/gladiadoras-mobile.jpg')}}" alt="" class="img-responsive center-block visible-xs" />
						</a>
					</div>
				</div>
				<div class="row grid">
					<div class="col-xs-6">
						<a href="{{url('nuevas-formas')}}#sexy-top" class="categorias">
							<img src="{{url('img/categorias/sandalias/uglyshoes.jpg')}}" alt="" class="img-responsive center-block hidden-xs" />
							<img src="{{url('img/categorias/sandalias/uglyshoes-mobile.jpg')}}" alt="" class="img-responsive center-block visible-xs" />
						</a>
					</div>
					<div class="col-xs-6">
						<a href="{{url('nuevas-formas')}}#enteritos" class="categorias">
							<img src="{{url('img/categorias/sandalias/minibag.jpg')}}" alt="" class="img-responsive center-block hidden-xs" />
							<img src="{{url('img/categorias/sandalias/minibag-mobile.jpg')}}" alt="" class="img-responsive center-block visible-xs" />
						</a>
					</div>
				</div>
				<div class="row grid">
					<div class="col-xs-6">
						<a href="{{url('nuevas-formas')}}#shorts" class="categorias">
							<img src="{{url('img/categorias/sandalias/suecos.jpg')}}" alt="" class="img-responsive center-block hidden-xs" />
							<img src="{{url('img/categorias/sandalias/suecos-mobile.jpg')}}" alt="" class="img-responsive center-block visible-xs" />
						</a>
					</div>
					<div class="col-xs-6">
						<img src="{{url('img/categorias/sandalias/alparragatas.jpg')}}" alt="" class="img-responsive center-block hidden-xs" />
						<img src="{{url('img/categorias/sandalias/alparragatas-mobile.jpg')}}" alt="" class="img-responsive center-block visible-xs" />
					</div>
				</div>
				<div class="row grid banner-marquis-sandalias">
					<div class="col-xs-12">
						<img src="{{url('img/banner-sandalias-marquis.jpg')}}" alt="" class="img-responsive center-block " />
					</div>
				</div>
				<div class="row grid ">
					<div class="col-xs-4 footer-sandalias">
						<a href="{{url('sandalias/accesorios')}}"><img src="{{url('img/small/lentes.jpg')}}" alt="" class="img-responsive center-block" /></a>
					</div>
					<div class="col-xs-4 footer-sandalias">
						<a href="{{url('sandalias/sandalias-por-menos')}}"><img src="{{url('img/small/index.jpg')}}" alt="" class="img-responsive center-block" /></a>
					</div>
					<div class="col-xs-4 footer-sandalias">
						<a href="{{url('sandalias/ninos')}}"><img src="{{url('img/small/ninos.jpg')}}" alt="" class="img-responsive center-block" /></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop