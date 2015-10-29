@extends("layouts/sandalias")
@section('contenido')
<div class="row main">
	<div class="col-xs-10 col-xs-offset-1 ">
		<div class="row borde">
			<div class="col-xs-12 ">
				<p class="bloque tu-look center-block text-center nueva-temporada">
					TOP10<br>
					<span class="italic-titulo-verano">DEL VERANO</span>
				</p>
				<div class="contenedor-nuevas-formas">
					<div id="minimal" class="top5">
						<div class="container">
							<h2 class="visible-xs visible-sm text-center">
								minimal
								<span class="boton" data-bloque="#slider-minimal"></span>
							</h2>
							<div id="slider-minimal" class="row slider">
								<div class="col-sm-3 hidden-xs top5-categorias">
									<p class="marca sandalias-temporada">
										<img src="{{url('img/nueva-temporada/minimal.png')}}" alt="" class="img-responsive">
										<br>
										#YOELIJO<br> 
										SER ATREVIDA<br>
										El recomendado<br>
										Palazzo + Loafer + Bucket Bag
									</p>
								</div>
								<div class="col-xs-12 col-sm-9 top5-imagenes">
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
						</div>
					</div>
					<p>
						<br>
					</p>
					<div id="gladiadoras" class="top5">
						<div class="container">
							<h2 class="visible-xs visible-sm text-center">
								Gladiadoras
								<span class="boton" data-bloque="#slider-gladiadoras"></span>
							</h2>
							<div id="slider-gladiadoras" class="row slider">
								<div class="col-sm-3 hidden-xs top5-categorias">
									<p class="marca sandalias-temporada">
										<img src="{{url('img/nueva-temporada/gladiadoras.png')}}" alt="" class="img-responsive">
										<br>
										#YOELIJO CAMINAR<br> 
										CON ESTILO<br> 
										El recomendado<br> 
										Short + Flecos + Bucket Bag
									</p>
								</div>
								<div class="col-sm-9 top5-imagenes">
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
						</div>
					</div>
					<p>
						<br>
					</p>
					<div id="deportivos" class="top5">
						<div class="container">
							<h2 class="visible-xs visible-sm text-center">
								Deportivos
								<span class="boton" data-bloque="#slider-deportivos"></span>
							</h2>
							<div id="slider-deportivos" class="row slider">
								<div class="col-sm-3 hidden-xs top5-categorias">
									<p class="marca sandalias-temporada">
										<img src="{{url('img/nueva-temporada/deportivos.png')}}" alt="" class="img-responsive">
										<br>
										#YOELIJO MIS FAVORITAS<br>
										El recomendado<br>
										Vestido Corto + Gladiadoras + <br>
										Minicartera
									</p>
								</div>
								<div class="col-xs-12 col-sm-9 top5-imagenes">
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
						</div>
					</div>
					<p>
						<br>
					</p>
					<div id="theuglyshoes" class="top5">
						<div class="container">
							<h2 class="visible-xs visible-sm text-center">
								The Ugly shoes
								<span class="boton" data-bloque="#slider-theuglyshoes"></span>
							</h2>
							<div id="slider-theuglyshoes" class="row slider">
								<div class="col-sm-3 hidden-xs top5-categorias">
									<p class="marca sandalias-temporada">
										<img src="{{url('img/nueva-temporada/theuglyshoes.png')}}" alt="" class="img-responsive">
										<br>
										#YOELIJO SER CASUAL<br>
										El recomendado<br>
										Shoulder off + Deportivos + <br>
										Bucket Bag
									</p>
								</div>
								<div class="col-xs-12 col-sm-9 top5-imagenes">
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
						</div>
					</div>
					<p>
						<br>
					</p>
					<div id="masculine" class="top5">
						<div class="container">
							<h2 class="visible-xs visible-sm text-center">
								masculine
								<span class="boton" data-bloque="#slider-masculine"></span>
							</h2>
							<div id="slider-masculine" class="row slider">
								<div class="col-sm-3 hidden-xs top5-categorias">
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
								<div class="col-xs-12 col-sm-9 top5-imagenes">
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
						</div>
					</div>
					<p>
						<br>
					</p>
					<div id="minibag" class="top5">
						<div class="container">
							<h2 class="visible-xs visible-sm text-center">
								minibag
								<span class="boton" data-bloque="#slider-minibag"></span>
							</h2>
							<div id="slider-minibag" class="row slider">
								<div class="col-sm-3 hidden-xs top5-categorias">
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
								<div class="col-xs-12 col-sm-9 top5-imagenes">
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
						</div>
					</div>
					<p>
						<br>
					</p>
					<div id="suecos" class="top5">
						<div class="container">
							<h2 class="visible-xs visible-sm text-center">
								suecos
								<span class="boton" data-bloque="#slider-suecos"></span>
							</h2>
							<div id="slider-suecos" class="row slider">
								<div class="col-sm-3 hidden-xs top5-categorias">
									<p class="marca sandalias-temporada">
										<img src="{{url('img/nueva-temporada/suecos.png')}}" alt="" class="img-responsive">
										<br>
										#YOELIJO MI COMODIDAD<br>
										El recomendado<br>
										Crop Top + Ugly <br>
										Shoes + Bolso Blanco
									</p>
								</div>
								<div class="col-xs-12 col-sm-9 top5-imagenes">
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
						</div>
					</div>
					<p>
						<br>
					</p>
					<div id="alpargatas" class="top5">
						<div class="container">
							<h2 class="visible-xs visible-sm text-center">
								alpargatas
								<span class="boton" data-bloque="#slider-alpargatas"></span>
							</h2>
							<div id="slider-alpargatas" class="row slider">
								<div class="col-sm-3 hidden-xs top5-categorias">
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
								<div class="col-xs-12 col-sm-9 top5-imagenes">
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
						</div>
					</div>
					<p>
						<br>
					</p>
					<div id="blancos" class="top5">
						<div class="container">
							<h2 class="visible-xs visible-sm text-center">
								blancos
								<span class="boton" data-bloque="#slider-blancos"></span>
							</h2>
							<div id="slider-blancos" class="row slider">
								<div class="col-sm-3 hidden-xs top5-categorias">
									<p class="marca sandalias-temporada">
										<img src="{{url('img/nueva-temporada/blancos.png')}}" alt="" class="img-responsive">
										<br>
										#YOELIJO MI COMODIDAD<br>
										El recomendado<br>
										Crop Top + Ugly Shoes + <br>
										Bolso Blanco
									</p>
								</div>
								<div class="col-xs-12 col-sm-9 top5-imagenes">
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
						</div>
					</div>
					<p>
						<br>
					</p>
					<div id="pasteles" class="top5">
						<div class="container">
							<h2 class="visible-xs visible-sm text-center">
								pasteles
								<span class="boton" data-bloque="#slider-pasteles"></span>
							</h2>
							<div id="slider-pasteles" class="row slider">
								<div class="col-sm-3 hidden-xs top5-categorias">
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
								<div class="col-xs-12 col-sm-9 top5-imagenes">
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
						</div>
					</div>
				</div>
				<div  class="row grid banner-sandalias-marcas">
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