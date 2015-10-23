@extends("layouts/master")
@section('contenido')
<div class="contenedor-fijo">
	<div id="banner" class="nivoSlider">
		<img src="{{url('img/banner/sjp-yo-elijo-verano.jpg')}}" alt="" />
		<img src="{{url('img/banner/yo-elijo-vestidos.jpg')}}" alt="" />
		<img src="{{url('img/banner/yo-elijo-palazzos.jpg')}}" alt="" />
		<img src="{{url('img/banner/yo-elijo-shorts.jpg')}}" alt="" />
		<img src="{{url('img/banner/yo-elijo-sexy-top.jpg')}}" alt="" />
	</div>
	<div class="marcas hidden-xs">
		<span id="slider-prev" class="atras"></span>
		<span id="slider-next" class="siguiente"></span>
		<div class="container-slider center-block">
			<p class="bloque no-me-conformo center-block text-center">
				LAS MEJORES <span>MARCAS</span>
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
						<a href="{{url('top-5-del-verano#maxi-dress')}}" class="categorias">
							<img src="{{url('img/categorias/maxi-dress.jpg')}}" alt="" class="img-responsive center-block visible-md visible-lg" />
							<img src="{{url('img/categorias/maxi-dress-mobile.jpg')}}" alt="" class="img-responsive center-block visible-xs" />
							<img src="{{url('img/categorias/maxi-dress-tablet.jpg')}}" alt="" class="img-responsive center-block visible-sm" />
							<span></span>
						</a>
					</div>
					<div class="col-xs-6">
						<a href="{{url('top-5-del-verano#palazos')}}" class="categorias">
							<img src="{{url('img/categorias/palazos.jpg')}}" alt="" class="img-responsive center-block visible-md visible-lg" />
							<img src="{{url('img/categorias/palazos-mobile.jpg')}}" alt="" class="img-responsive center-block visible-xs" />
							<img src="{{url('img/categorias/palazos-tablet.jpg')}}" alt="" class="img-responsive center-block visible-sm" />
							<span></span>
						</a>
					</div>
				</div>
				<div class="row grid">
					<div class="col-xs-6">
						<a href="{{url('top-5-del-verano#sexy-top')}}" class="categorias">
							<img src="{{url('img/categorias/sexy-top.jpg')}}" alt="" class="img-responsive center-block visible-md visible-lg" />
							<img src="{{url('img/categorias/sexy-top-mobile.jpg')}}" alt="" class="img-responsive center-block visible-xs" />
							<img src="{{url('img/categorias/sexy-top-tablet.jpg')}}" alt="" class="img-responsive center-block visible-sm" />
							<span></span>
						</a>
					</div>
					<div class="col-xs-6">
						<a href="{{url('top-5-del-verano#enteritos')}}" class="categorias">
							<img src="{{url('img/categorias/enteritos.jpg')}}" alt="" class="img-responsive center-block visible-md visible-lg" />
							<img src="{{url('img/categorias/enteritos-mobile.jpg')}}" alt="" class="img-responsive center-block visible-xs" />
							<img src="{{url('img/categorias/enteritos-tablet.jpg')}}" alt="" class="img-responsive center-block visible-sm" />
							<span></span>
						</a>
					</div>
				</div>
				<div class="row grid">
					<div class="col-xs-6">
						<a href="{{url('top-5-del-verano#shorts')}}" class="categorias">
							<img src="{{url('img/categorias/shorts.jpg')}}" alt="" class="img-responsive center-block visible-md visible-lg" />
							<img src="{{url('img/categorias/shorts-mobile.jpg')}}" alt="" class="img-responsive center-block visible-xs" />
							<img src="{{url('img/categorias/shorts-tablet.jpg')}}" alt="" class="img-responsive center-block visible-sm" />
							<span></span>
						</a>
					</div>
					<div class="col-xs-6">
						<div class="slider-marcas center-block">
							<ul class="bxslider-marcas">
								<li>
									<img src="{{url('img/marcas/marquis.jpg')}}" alt="" class="img-responsive center-block" />
								</li>
								<li>
									<img src="{{url('img/marcas/V-SLIDER1.jpg')}}" alt="" class="img-responsive center-block" />
								</li>
								<li>
									<img src="{{url('img/marcas/V-SLIDER2.jpg')}}" alt="" class="img-responsive center-block" />
								</li>
								<li>
									<img src="{{url('img/marcas/V-SLIDER3.jpg')}}" alt="" class="img-responsive center-block" />
								</li>
								<li>
									<img src="{{url('img/marcas/V-SLIDER4.jpg')}}" alt="" class="img-responsive center-block" />
								</li>
								<li>
									<img src="{{url('img/marcas/V-SLIDER5.jpg')}}" alt="" class="img-responsive center-block" />
								</li>
								<li>
									<img src="{{url('img/marcas/V-SLIDER6.jpg')}}" alt="" class="img-responsive center-block" />
								</li>
								<li>
									<img src="{{url('img/marcas/V-SLIDER7.jpg')}}" alt="" class="img-responsive center-block" />
								</li>
								<li>
									<img src="{{url('img/marcas/V-SLIDER8.jpg')}}" alt="" class="img-responsive center-block" />
								</li>
								<li>
									<img src="{{url('img/marcas/V-SLIDER9.jpg')}}" alt="" class="img-responsive center-block" />
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row grid">
					<div class="col-xs-12">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe src="https://www.youtube.com/embed/l5ePXZpJJew" class="embed-responsive-item"></iframe>
						</div>
					</div>
				</div>
				<h2 class="text-center hidden-xs">
					<a href="{{url('top-5-del-verano')}}">
						ELIGE <span>TUS TOP 5</span>
					</a>
				</h2>
				<a href="{{url('tu-look-por-menos')}}" class="bloque tu-look-por-menos center-block text-center">
					TU <span>LOOK</span> POR <span>MENOS</span>
					<small>
						Haz clic y encuentra tu <span>look del verano</span> <br class="visible-xs"> a precios increíbles
					</small>
				</a>
			</div>
		</div>
	</div>
</div>
@stop