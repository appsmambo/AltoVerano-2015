@extends("layouts/sandalias")
@section('contenido')
<div class="row main">
	<div class="col-xs-10 col-xs-offset-1 ">
		<div class="row borde">
			<div class="col-xs-12 ">
				<p class="bloque nuevas-formas accesorios center-block text-center">
					+ACCE<span>SORIOS</span>
				</p>
				<div id="marquis" class="row">
					<div class="col-md-5 accesorios-slider-banner">
						<p class="marca">
							<img src="{{url('img/accesorios/marquis.jpg')}}" alt="" class="img-responsive center-block hidden-xs">
							<img src="{{url('img/accesorios/marquis.jpg')}}" alt="" class="img-responsive center-block boton visible-xs-xs" data-bloque="#slider-marquis">
						</p>
					</div>
					<div class="col-md-7 accesorios-slider-content slider" id="slider-marquis">
						<span id="prev-marquis" class="atras"></span>
						<span id="next-marquis" class="siguiente"></span>
						<ul class="bxslider-marquis">
							<li>
								<a href="#" class="abrir-sandalias" data-bloque="#maxidress-1">
									<img src="{{url('img/accesorios/lentes-marquis-1.jpg')}}" alt="" class="center-block" />
								</a>
								<p class="accesorios-slider">
									Vestido Tejido Jacuard  <small>16345855</small>  <span>S/. 199</span>
								</p>
							</li>
							<li>
								<a href="#" class="abrir-sandalias" data-bloque="#maxidress-1">
									<img src="{{url('img/accesorios/lentes-marquis-2.jpg')}}" alt="" class="center-block" />
								</a>
								<p class="accesorios-slider">
									Vestido Tejido Jacuard  <small>16345855</small>  <span>S/. 199</span>
								</p>
							</li>
						</ul>
					</div>
				</div>
				<p>
					<br>
				</p>
				<div id="cacharel" class="row">
					<div class="col-md-5 accesorios-slider-banner">
						<p class="marca">
							<img src="{{url('img/accesorios/cacharel.jpg')}}" alt="" class="img-responsive center-block hidden-xs">
							<img src="{{url('img/accesorios/cacharel.jpg')}}" alt="" class="img-responsive center-block boton visible-xs-xs" data-bloque="#slider-cacharel">
						</p>
					</div>
					<div class="col-md-7 accesorios-slider-content" id="slider-cacharel">
						<span id="prev-cacharel" class="atras"></span>
						<span id="next-cacharel" class="siguiente"></span>
						<ul class="bxslider-cacharel">
							<li>
								<a href="#" class="abrir-sandalias" data-bloque="#maxidress-1">
									<img src="{{url('img/accesorios/lentes-cacharel-1.jpg')}}" alt="" class="center-block" />
								</a>
								<p class="accesorios-slider">
									Vestido Tejido Jacuard  <small>16345855</small>  <span>S/. 199</span>
								</p>
							</li>
							<li>
								<a href="#" class="abrir-sandalias" data-bloque="#maxidress-1">
									<img src="{{url('img/accesorios/lentes-cacharel-2.jpg')}}" alt="" class="center-block" />
								</a>
								<p class="accesorios-slider">
									Vestido Tejido Jacuard  <small>16345855</small>  <span>S/. 199</span>
								</p>
							</li>
						</ul>
					</div>
				</div>
				<p>
					<br>
				</p>
				<div id="index" class="row">
					<div class="col-md-5 accesorios-slider-banner">
						<p class="marca">
							<img src="{{url('img/accesorios/index.jpg')}}" alt="" class="img-responsive center-block hidden-xs">
							<img src="{{url('img/accesorios/index.jpg')}}" alt="" class="img-responsive center-block boton visible-xs-xs" data-bloque="#slider-index">
						</p>
					</div>
					<div class="col-md-7 accesorios-slider-content" id="slider-index">
						<span id="prev-index" class="atras"></span>
						<span id="next-index" class="siguiente"></span>
						<ul class="bxslider-index">
							<li>
								<a href="#" class="abrir-sandalias" data-bloque="#maxidress-1">
									<img src="{{url('img/accesorios/lentes-index-1.jpg')}}" alt="" class="center-block" />
								</a>
								<p class="accesorios-slider">
									Vestido Tejido Jacuard  <small>16345855</small>  <span>S/. 199</span>
								</p>
							</li>
							<li>
								<a href="#" class="abrir-sandalias" data-bloque="#maxidress-1">
									<img src="{{url('img/accesorios/lentes-index-2.jpg')}}" alt="" class="center-block" />
								</a>
								<p class="accesorios-slider">
									Vestido Tejido Jacuard  <small>16345855</small>  <span>S/. 199</span>
								</p>
							</li>
						</ul>
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
<div id="maxidress-1" class="prenda">
	<img src="{{url('img/accesorios/prendas/lentes-marquis-1.jpg')}}" alt="">
	<!--div class="detalle">
		Polo Huecos<br>
		1234456<br>
		<span><small>s/.</small>59.90</span>
	</div-->
</div>
@stop