@extends("layouts/sandalias")
@section('contenido')
<div class="contenedor-fijo banner-ninos">
	<img src="{{url('img/ninos/banner.jpg')}}" alt="" class="img-responsive">
</div>
<div class="clearfix"></div>
<div class="row main ninos">
	<div class="col-md-10 col-md-offset-1 ">
		<div class="row borde azul">
			<div class="col-sm-12 ">
				
				<div id="alpargatas" class="row">
					<div class="col-sm-3 ">
						<p class="marca sandalias-temporada">
							<img src="{{url('img/ninos/alpargatas.png')}}" alt="" class="img-responsive">
						</p>
					</div>
					<div class="col-sm-9">
						<span id="prev-alpargatas" class="atras"></span>
						<span id="next-alpargatas" class="siguiente"></span>
						<ul class="bxslider-alpargatas">
							<li>
								<a href="#" class="abrir-sandalias" data-bloque="#maxidress-1">
									<img src="{{url('img/ninos/alpargatas-1.jpg')}}" alt="" class="center-block" />
								</a>
							</li>
							<li>
								<a href="#" class="abrir-sandalias" data-bloque="#maxidress-1">
									<img src="{{url('img/ninos/alpargatas-2.jpg')}}" alt="" class="center-block" />
								</a>
							</li>
							<li>
								<a href="#" class="abrir-sandalias" data-bloque="#maxidress-1">
									<img src="{{url('img/ninos/alpargatas-3.jpg')}}" alt="" class="center-block" />
								</a>
							</li>
						</ul>
					</div>
				</div>
				<p>
					<br>
				</p>
				<div id="sandalias" class="row">
					<div class="col-sm-3 ">
						<p class="marca sandalias-temporada">
							<img src="{{url('img/ninos/sandalas.png')}}" alt="" class="img-responsive">
						</p>
					</div>
					<div class="col-sm-9">
						<span id="prev-sandalias" class="atras"></span>
						<span id="next-sandalias" class="siguiente"></span>
						<ul class="bxslider-sandalias">
							<li>
								<a href="#" class="abrir-sandalias" data-bloque="#maxidress-1">
									<img src="{{url('img/ninos/sandalas-1.jpg')}}" alt="" class="center-block" />
								</a>
							</li>
							<li>
								<a href="#" class="abrir-sandalias" data-bloque="#maxidress-1">
									<img src="{{url('img/ninos/sandalas-2.jpg')}}" alt="" class="center-block" />
								</a>
							</li>
							<li>
								<a href="#" class="abrir-sandalias" data-bloque="#maxidress-1">
									<img src="{{url('img/ninos/sandalas-3.jpg')}}" alt="" class="center-block" />
								</a>
							</li>
						</ul>
					</div>
				</div>
				<p>
					<br>
				</p>
				<div id="deportivos" class="row">
					<div class="col-sm-3 ">
						<p class="marca sandalias-temporada">
							<img src="{{url('img/ninos/deportivos.png')}}" alt="" class="img-responsive">
						</p>
					</div>
					<div class="col-sm-9">
						<span id="prev-deportivos" class="atras"></span>
						<span id="next-deportivos" class="siguiente"></span>
						<ul class="bxslider-deportivos">
							<li>
								<a href="#" class="abrir-sandalias" data-bloque="#maxidress-1">
									<img src="{{url('img/ninos/deportivos-1.jpg')}}" alt="" class="center-block" />
								</a>
							</li>
							<li>
								<a href="#" class="abrir-sandalias" data-bloque="#maxidress-1">
									<img src="{{url('img/ninos/deportivos-2.jpg')}}" alt="" class="center-block" />
								</a>
							</li>
							<li>
								<a href="#" class="abrir-sandalias" data-bloque="#maxidress-1">
									<img src="{{url('img/ninos/deportivos-3.jpg')}}" alt="" class="center-block" />
								</a>
							</li>
						</ul>
					</div>
				</div>
				<p>
					<br>
				</p>
				<div id="harvest" class="row">
					<div class="col-sm-3 ">
						<p class="marca sandalias-temporada">
							<img src="{{url('img/ninos/harvest.png')}}" alt="" class="img-responsive">
						</p>
					</div>
					<div class="col-sm-9">
						<span id="prev-harvest" class="atras"></span>
						<span id="next-harvest" class="siguiente"></span>
						<ul class="bxslider-harvest">
							<li>
								<a href="#" class="abrir-sandalias" data-bloque="#maxidress-1">
									<img src="{{url('img/ninos/harvest-1.jpg')}}" alt="" class="center-block" />
								</a>
							</li>
							<li>
								<a href="#" class="abrir-sandalias" data-bloque="#maxidress-1">
									<img src="{{url('img/ninos/harvest-2.jpg')}}" alt="" class="center-block" />
								</a>
							</li>
							<li>
								<a href="#" class="abrir-sandalias" data-bloque="#maxidress-1">
									<img src="{{url('img/ninos/harvest-2.jpg')}}" alt="" class="center-block" />
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div  class="row grid banner-sandalias-marcas ninos">
					<div class="col-md-6 footer-sandalias">
						<a href="{{url('sandalias/accesorios')}}"><img src="{{url('img/big/lentes.jpg')}}" alt="" class="img-responsive center-block" /></a>
					</div>
					<div class="col-md-6 footer-sandalias">
						<a href="{{url('sandalias/sandalias-por-menos')}}"><img src="{{url('img/big/index.jpg')}}" alt="" class="img-responsive center-block" /></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop
@section('contenido-dinamico')
<div id="maxidress-1" class="prenda">
	<img src="{{url('img/ninos/modal/deportivos-2.jpg')}}" alt="">
	<div class="detalle look ninos">
		<img src="{{url('img/ninos/modal/harvest.png')}}" alt="" class="logo">
		Polo Marquis<br>
		1234456
		<span class="precio-ninos"><small>s/.</small>149.<small>90</small></span>
	</div>
</div>
@stop