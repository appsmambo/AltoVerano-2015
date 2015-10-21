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
			<div class="col-sm-12 ">
				<p class="bloque tu-look center-block text-center nueva-temporada">
					NUEVA
					<small>TEMPO<span>RADA</span></small>
				</p>
				<div id="minimal" class="row">
					<div class="col-sm-3 ">
						<p class="marca sandalias-temporada">
							<img src="{{url('img/nueva-temporada/minimal.png')}}" alt="" class="img-responsive">
							<br>
							#YOELIJO<br> 
							SER ATREVIDA<br>
							El recomendado<br>
							Palazzo + Loafer + Bucket Bag
						</p>
					</div>
					<div class="col-sm-9">
						<span id="prev-minimal" class="atras"></span>
						<span id="next-minimal" class="siguiente"></span>
						<ul class="bxslider-minimal">
							<li>
								<a href="#" class="abrir-sandalias" data-bloque="#maxidress-1">
									<img src="{{url('img/nueva-temporada/marquis-1.jpg')}}" alt="" class="center-block" />
								</a>
							</li>
							<li>
								<a href="#" class="abrir-sandalias" data-bloque="#maxidress-1">
									<img src="{{url('img/nueva-temporada/marquis-2.jpg')}}" alt="" class="center-block" />
								</a>
							</li>
							<li>
								<a href="#" class="abrir-sandalias" data-bloque="#maxidress-1">
									<img src="{{url('img/nueva-temporada/timechopper-1.jpg')}}" alt="" class="center-block" />
								</a>
							</li>
						</ul>
					</div>
				</div>
				<p>
					<br>
				</p>
				<div id="gladiadoras" class="row">
					<div class="col-sm-3 ">
						<p class="marca sandalias-temporada">
							<img src="{{url('img/nueva-temporada/gladiadoras.png')}}" alt="" class="img-responsive">
							<br>
							#YOELIJO CAMINAR<br> 
							CON ESTILO<br> 
							El recomendado<br> 
							Short + Flecos + Bucket Bag
						</p>
					</div>
					<div class="col-sm-9">
						<span id="prev-gladiadoras" class="atras"></span>
						<span id="next-gladiadoras" class="siguiente"></span>
						<ul class="bxslider-gladiadoras">
							<li>
								<a href="#" class="abrir-sandalias" data-bloque="#maxidress-1">
									<img src="{{url('img/nueva-temporada/index-1.jpg')}}" alt="" class="center-block" />
								</a>
							</li>
							<li>
								<a href="#" class="abrir-sandalias" data-bloque="#maxidress-1">
									<img src="{{url('img/nueva-temporada/marquis-3.jpg')}}" alt="" class="center-block" />
								</a>
							</li>
							<li>
								<a href="#" class="abrir-sandalias" data-bloque="#maxidress-1">
									<img src="{{url('img/nueva-temporada/mazzari-1.jpg')}}" alt="" class="center-block" />
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
							<img src="{{url('img/nueva-temporada/deportivos.png')}}" alt="" class="img-responsive">
							<br>
							#YOELIJO MIS FAVORITAS<br>
							El recomendado<br>
							Vestido Corto + Gladiadoras + <br>
							Minicartera
						</p>
					</div>
					<div class="col-sm-9">
						<span id="prev-deportivos" class="atras"></span>
						<span id="next-deportivos" class="siguiente"></span>
						<ul class="bxslider-deportivos">
							<li>
								<a href="#" class="abrir-sandalias" data-bloque="#maxidress-1">
									<img src="{{url('img/nueva-temporada/jeffreycampbell-1.jpg')}}" alt="" class="center-block" />
								</a>
							</li>
							<li>
								<a href="#" class="abrir-sandalias" data-bloque="#maxidress-1">
									<img src="{{url('img/nueva-temporada/index-2.jpg')}}" alt="" class="center-block" />
								</a>
							</li>
							<li>
								<a href="#" class="abrir-sandalias" data-bloque="#maxidress-1">
									<img src="{{url('img/nueva-temporada/cat-1.jpg')}}" alt="" class="center-block" />
								</a>
							</li>
						</ul>
					</div>
				</div>
				<p>
					<br>
				</p>
				<div id="theuglyshoes" class="row">
					<div class="col-sm-3 ">
						<p class="marca sandalias-temporada">
							<img src="{{url('img/nueva-temporada/theuglyshoes.png')}}" alt="" class="img-responsive">
							<br>
							#YOELIJO SER CASUAL<br>
							El recomendado<br>
							Shoulder off + Deportivos + <br>
							Bucket Bag
						</p>
					</div>
					<div class="col-sm-9">
						<span id="prev-theuglyshoes" class="atras"></span>
						<span id="next-theuglyshoes" class="siguiente"></span>
						<ul class="bxslider-theuglyshoes">
							<li>
								<a href="#" class="abrir-sandalias" data-bloque="#maxidress-1">
									<img src="{{url('img/nueva-temporada/barbados-1.jpg')}}" alt="" class="center-block" />
								</a>
							</li>
							<li>
								<a href="#" class="abrir-sandalias" data-bloque="#maxidress-1">
									<img src="{{url('img/nueva-temporada/index-3.jpg')}}" alt="" class="center-block" />
								</a>
							</li>
							<li>
								<a href="#" class="abrir-sandalias" data-bloque="#maxidress-1">
									<img src="{{url('img/nueva-temporada/index-4.jpg')}}" alt="" class="center-block" />
								</a>
							</li>
						</ul>
					</div>
				</div>
				<p>
					<br>
				</p>
				<div id="masculine" class="row">
					<div class="col-sm-3 ">
						<p class="marca sandalias-temporada">
							<img src="{{url('img/nueva-temporada/masculine.png')}}" alt="" class="img-responsive">
							<br>
							#YOELIJO MI <br>
							MEJOR ACCESORIO<br>
							El recomendado<br>
							Maxi Vestido + <br>
							Ugly Shoes+ Bucket Bag
						</p>
					</div>
					<div class="col-sm-9">
						<span id="prev-masculine" class="atras"></span>
						<span id="next-masculine" class="siguiente"></span>
						<ul class="bxslider-masculine">
							<li>
								<a href="#" class="abrir-sandalias" data-bloque="#maxidress-1">
									<img src="{{url('img/nueva-temporada/cat-2.jpg')}}" alt="" class="center-block" />
								</a>
							</li>
							<li>
								<a href="#" class="abrir-sandalias" data-bloque="#maxidress-1">
									<img src="{{url('img/nueva-temporada/marquis-4.jpg')}}" alt="" class="center-block" />
								</a>
							</li>
							<li>
								<a href="#" class="abrir-sandalias" data-bloque="#maxidress-1">
									<img src="{{url('img/nueva-temporada/marquis-5.jpg')}}" alt="" class="center-block" />
								</a>
							</li>
						</ul>
					</div>
				</div>
				<p>
					<br>
				</p>
				<div id="minibag" class="row">
					<div class="col-sm-3 ">
						<p class="marca sandalias-temporada">
							<img src="{{url('img/nueva-temporada/minibag.png')}}" alt="" class="img-responsive">
							<br>
							#YOELIJO MI<br>
							COMPLEMENTO PERFECTO<br>
							El recomendado<br>
							Palazzo+ Masculine+ <br>
							Minicartera
						</p>
					</div>
					<div class="col-sm-9">
						<span id="prev-minibag" class="atras"></span>
						<span id="next-minibag" class="siguiente"></span>
						<ul class="bxslider-minibag">
							<li>
								<a href="#" class="abrir-sandalias" data-bloque="#maxidress-1">
									<img src="{{url('img/nueva-temporada/index-5.jpg')}}" alt="" class="center-block" />
								</a>
							</li>
							<li>
								<a href="#" class="abrir-sandalias" data-bloque="#maxidress-1">
									<img src="{{url('img/nueva-temporada/index-6.jpg')}}" alt="" class="center-block" />
								</a>
							</li>
							<li>
								<a href="#" class="abrir-sandalias" data-bloque="#maxidress-1">
									<img src="{{url('img/nueva-temporada/index-7.jpg')}}" alt="" class="center-block" />
								</a>
							</li>
						</ul>
					</div>
				</div>
				<p>
					<br>
				</p>
				<div id="suecos" class="row">
					<div class="col-sm-3 ">
						<p class="marca sandalias-temporada">
							<img src="{{url('img/nueva-temporada/suecos.png')}}" alt="" class="img-responsive">
							<br>
							#YOELIJO MI COMODIDAD<br>
							El recomendado<br>
							Crop Top + Ugly <br>
							Shoes + Bolso Blanco
						</p>
					</div>
					<div class="col-sm-9">
						<span id="prev-suecos" class="atras"></span>
						<span id="next-suecos" class="siguiente"></span>
						<ul class="bxslider-suecos">
							<li>
								<a href="#" class="abrir-sandalias" data-bloque="#maxidress-1">
									<img src="{{url('img/nueva-temporada/barbados-2.jpg')}}" alt="" class="center-block" />
								</a>
							</li>
							<li>
								<a href="#" class="abrir-sandalias" data-bloque="#maxidress-1">
									<img src="{{url('img/nueva-temporada/mazzari-2.jpg')}}" alt="" class="center-block" />
								</a>
							</li>
							<li>
								<a href="#" class="abrir-sandalias" data-bloque="#maxidress-1">
									<img src="{{url('img/nueva-temporada/marquis-6.jpg')}}" alt="" class="center-block" />
								</a>
							</li>
						</ul>
					</div>
				</div>
				<p>
					<br>
				</p>
				<div id="alpargatas" class="row">
					<div class="col-sm-3 ">
						<p class="marca sandalias-temporada">
							<img src="{{url('img/nueva-temporada/alpargatas.png')}}" alt="" class="img-responsive">
							<br>
							#YOELIJO <br>
							LLEVARLAS SIEMPRE<br>
							El recomendado<br>
							Maxi Vestido + Alpargatas + <br>
							Minicartera
						</p>
					</div>
					<div class="col-sm-9">
						<span id="prev-alpargatas" class="atras"></span>
						<span id="next-alpargatas" class="siguiente"></span>
						<ul class="bxslider-alpargatas">
							<li>
								<a href="#" class="abrir-sandalias" data-bloque="#maxidress-1">
									<img src="{{url('img/nueva-temporada/barbados-3.jpg')}}" alt="" class="center-block" />
								</a>
							</li>
							<li>
								<a href="#" class="abrir-sandalias" data-bloque="#maxidress-1">
									<img src="{{url('img/nueva-temporada/navigata-1.jpg')}}" alt="" class="center-block" />
								</a>
							</li>
							<li>
								<a href="#" class="abrir-sandalias" data-bloque="#maxidress-1">
									<img src="{{url('img/nueva-temporada/marquis-7.jpg')}}" alt="" class="center-block" />
								</a>
							</li>
						</ul>
					</div>
				</div>
				<p>
					<br>
				</p>
				<div id="blancos" class="row">
					<div class="col-sm-3 ">
						<p class="marca sandalias-temporada">
							<img src="{{url('img/nueva-temporada/blancos.png')}}" alt="" class="img-responsive">
							<br>
							#YOELIJO MI COMODIDAD<br>
							El recomendado<br>
							Crop Top + Ugly Shoes + <br>
							Bolso Blanco
						</p>
					</div>
					<div class="col-sm-9">
						<span id="prev-blancos" class="atras"></span>
						<span id="next-blancos" class="siguiente"></span>
						<ul class="bxslider-blancos">
							<li>
								<a href="#" class="abrir-sandalias" data-bloque="#maxidress-1">
									<img src="{{url('img/nueva-temporada/marquis-8.jpg')}}" alt="" class="center-block" />
								</a>
							</li>
							<li>
								<a href="#" class="abrir-sandalias" data-bloque="#maxidress-1">
									<img src="{{url('img/nueva-temporada/marquis-9.jpg')}}" alt="" class="center-block" />
								</a>
							</li>
							<li>
								<a href="#" class="abrir-sandalias" data-bloque="#maxidress-1">
									<img src="{{url('img/nueva-temporada/marquis-10.jpg')}}" alt="" class="center-block" />
								</a>
							</li>
						</ul>
					</div>
				</div>
				<p>
					<br>
				</p>
				<div id="pasteles" class="row">
					<div class="col-sm-3 ">
						<p class="marca sandalias-temporada">
							<img src="{{url('img/nueva-temporada/pasteles.png')}}" alt="" class="img-responsive">
							<br>
							#YO ELIJO TENER MÁS <br>
							DE UNA<br>
							El recomendado<br>
							Short + Zapatillas Altas + <br>
							Bucket Bag
						</p>
					</div>
					<div class="col-sm-9">
						<span id="prev-pasteles" class="atras"></span>
						<span id="next-pasteles" class="siguiente"></span>
						<ul class="bxslider-pasteles">
							<li>
								<a href="#" class="abrir-sandalias" data-bloque="#maxidress-1">
									<img src="{{url('img/nueva-temporada/marquis-11.jpg')}}" alt="" class="center-block" />
								</a>
							</li>
							<li>
								<a href="#" class="abrir-sandalias" data-bloque="#maxidress-1">
									<img src="{{url('img/nueva-temporada/marquis-12.jpg')}}" alt="" class="center-block" />
								</a>
							</li>
							<li>
								<a href="#" class="abrir-sandalias" data-bloque="#maxidress-1">
									<img src="{{url('img/nueva-temporada/marquis-13.jpg')}}" alt="" class="center-block" />
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div  class="row grid banner-sandalias-marcas">
					<div class="col-md-4 footer-sandalias">
						<a href="{{url('sandalias/accesorios')}}"><img src="{{url('img/small/lentes.jpg')}}" alt="" class="img-responsive center-block" /></a>
					</div>
					<div class="col-md-4 footer-sandalias">
						<a href="{{url('sandalias/sandalias-por-menos')}}"><img src="{{url('img/small/index.jpg')}}" alt="" class="img-responsive center-block" /></a>
					</div>
					<div class="col-md-4 footer-sandalias">
						<a href="{{url('sandalias/ninos')}}"><img src="{{url('img/small/ninos.jpg')}}" alt="" class="img-responsive center-block" /></a>
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
	<img src="{{url('img/nueva-temporada/prendas/marquis-1.jpg')}}" alt="">
	<div class="detalle">
		Polo Marquis<br>
		1234456<br>
		<small>S/.59.90</small>
	</div>
</div>
@stop