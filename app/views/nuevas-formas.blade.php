@extends("layouts/master")
@section('contenido')
<div class="row main">
	<div class="col-xs-10 col-xs-offset-1">
		<div class="row borde">
			<div class="col-xs-12">
				<p class="bloque nuevas-formas center-block text-center">
					TOP5<br>
					<span>DEL</span><span>VERANO</span>
				</p>
				<div class="contenedor-nuevas-formas">
					<div id="maxi-dress" class="top5">
						<div class="container">
							<h2 class="visible-xs visible-sm">
								maxi dress
								<span class="boton" data-bloque="#slider-maxi-dress"></span>
							</h2>
							<div id="slider-maxi-dress" class="row slider">
								<div class="col-sm-3 hidden-xs">
									<p class="marca">
										<img src="{{url('img/maxi-dress.png')}}" alt="" class="img-responsive">
										<br>
										El incondicional.<br>
										Escote o cuello halter, estampado o color entero,<br>
										con volantes o camisero…<br>
										Las opciones son infinitas.<br>
										¡Elige el tuyo!
									</p>
								</div>
								<div class="col-xs-12 col-sm-9">
									<span id="prev-maxidress" class="atras"></span>
									<span id="next-maxidress" class="siguiente"></span>
									<ul class="bxslider-maxidress">
										<li>
											<a href="#" class="abrir-layer" data-bloque="#maxidress-1">
												<img src="{{url('img/nuevas-formas/maxi-dress-tatienne.jpg')}}" alt="" class="center-block" />
											</a>
										</li>
										<li>
											<a href="#" class="abrir-layer" data-bloque="#maxidress-1">
												<img src="{{url('img/nuevas-formas/maxi-dress-pepe-jeans.jpg')}}" alt="" class="center-block" />
											</a>
										</li>
										<li>
											<a href="#" class="abrir-layer" data-bloque="#maxidress-1">
												<img src="{{url('img/nuevas-formas/maxi-dress-marquis.jpg')}}" alt="" class="center-block" />
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
					<div id="palazos" class="top5">
						<div class="container">
							<h2 class="visible-xs visible-sm">
								PALAZZOS
								<span class="boton" data-bloque="#slider-palazzos"></span>
							</h2>
							<div id="slider-palazzos" class="row slider">
								<div class="col-sm-3 hidden-xs">
									<p class="marca">
										<img src="{{url('img/palazos.png')}}" alt="" class="img-responsive">
										<br>
										Cómodo, fresco, femenino<br>
										e inevitablemente effortless.<br>
										Un look relajado y agradable para las calurosas tardes de verano.
									</p>
								</div>
								<div class="col-xs-12 col-sm-9">
									<span id="prev-palazos" class="atras"></span>
									<span id="next-palazos" class="siguiente"></span>
									<ul class="bxslider-palazos">
										<li><img src="{{url('img/nuevas-formas/palazos-tatienne.jpg')}}" alt="" class="center-block" /></li>
										<li><img src="{{url('img/nuevas-formas/palazos-marquis.jpg')}}" alt="" class="center-block" /></li>
										<li><img src="{{url('img/nuevas-formas/palazos-index.jpg')}}" alt="" class="center-block" /></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<p>
						<br>
					</p>
					<div id="sexy-top" class="top5">
						<div class="container">
							<h2 class="visible-xs visible-sm">
								sexy top
								<span class="boton" data-bloque="#slider-sexy-top"></span>
							</h2>
							<div id="slider-sexy-top" class="row slider">
								<div class="col-sm-3 hidden-xs">
									<p class="marca">
										<img src="{{url('img/sexy-top.png')}}" alt="" class="img-responsive">
										<br>
										Shoulder off, crop top o de espalda descubierta. Existen miles de posibilidades para combinarlos, pruébalos todos<br>
										y elige el ideal para ti.
									</p>
								</div>
								<div class="col-xs-12 col-sm-9">
									<span id="prev-sexy-top" class="atras"></span>
									<span id="next-sexy-top" class="siguiente"></span>
									<ul class="bxslider-sexy-top">
										<li><img src="{{url('img/nuevas-formas/sexy-top-marquis.jpg')}}" alt="" class="center-block" /></li>
										<li><img src="{{url('img/nuevas-formas/sexy-top-navigata.jpg')}}" alt="" class="center-block" /></li>
										<li><img src="{{url('img/nuevas-formas/sexy-top-tatienne.jpg')}}" alt="" class="center-block" /></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<p>
						<br>
					</p>
					<div id="enteritos" class="top5">
						<div class="container">
							<h2 class="visible-xs visible-sm">
								enteritos
								<span class="boton" data-bloque="#slider-enteritos"></span>
							</h2>
							<div id="slider-enteritos" class="row slider">
								<div class="col-sm-3 hidden-xs">
									<p class="marca">
										<img src="{{url('img/enteritos.png')}}" alt="" class="img-responsive">
										<br>
										Versátil, práctico y muy femenino, es la prenda<br>
										esencial de este verano.<br>
										Puedes llevarlo casual o informal, depende de los accesorios.
									</p>
								</div>
								<div class="col-xs-12 col-sm-9">
									<span id="prev-enteritos" class="atras"></span>
									<span id="next-enteritos" class="siguiente"></span>
									<ul class="bxslider-enteritos">
										<li><img src="{{url('img/nuevas-formas/enteritos-marquis.jpg')}}" alt="" class="center-block" /></li>
										<li><img src="{{url('img/nuevas-formas/enteritos-navigata.jpg')}}" alt="" class="center-block" /></li>
										<li><img src="{{url('img/nuevas-formas/enteritos-index.jpg')}}" alt="" class="center-block" /></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<p>
						<br>
					</p>
					<div id="shorts" class="top5">
						<div class="container">
							<h2 class="visible-xs visible-sm">
								shorts
								<span class="boton" data-bloque="#slider-shorts"></span>
							</h2>
							<div id="slider-shorts" class="row slider">
								<div class="col-sm-3 hidden-xs">
									<p class="marca">
										<img src="{{url('img/shorts.png')}}" alt="" class="img-responsive">
										<br>
										Alargan las piernas,<br>
										marcan la cintura y son<br>
										el clásico de todos los veranos. Los favoritos de la playa ahora invaden la ciudad. La vida es short, disfrútala.
									</p>
								</div>
								<div class="col-xs-12 col-sm-9">
									<span id="prev-shorts" class="atras"></span>
									<span id="next-shorts" class="siguiente"></span>
									<ul class="bxslider-shorts">
										<li><img src="{{url('img/nuevas-formas/shorts-tatienne.jpg')}}" alt="" class="center-block" /></li>
										<li><img src="{{url('img/nuevas-formas/shorts-marquis.jpg')}}" alt="" class="center-block" /></li>
										<li><img src="{{url('img/nuevas-formas/shorts-navigata.jpg')}}" alt="" class="center-block" /></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<p class="hidden-xs">
						<br>
					</p>
				</div>
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
<div id="maxidress-1" class="prenda">
	<img src="{{url('img/nuevas-formas/prendas/sexitop-navigata.jpg')}}" alt="">
	<div class="detalle">
		Polo Huecos<br>
		1234456<br>
		<span><small>s/.</small>59.90</span>
	</div>
</div>
@stop