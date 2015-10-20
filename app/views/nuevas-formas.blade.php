@extends("layouts/master")
@section('menu')
<a href="{{url('tu-look-por-menos')}}">
	tu look por menos
</a>
<a href="{{url('nuevas-formas')}}" class="active">
	nuevas formas
</a>
@stop
@section('contenido')
<div class="row main">
	<div class="col-sm-8 col-sm-offset-1 no-padding">
		<div class="row borde">
			<div class="col-sm-10 no-padding">
				<p class="bloque nuevas-formas center-block text-center">
					NUEVAS<br>
					<span>FOR</span><span>MAS</span>
				</p>
				<div id="maxi-dress" class="row">
					<div class="col-sm-2">
						<p class="marca">
							<img src="{{url('img/maxi-dress.png')}}" alt="" class="img-responsive">
							<br>
							Ligero, fresco, alegre y romántico.<br>
							Con escote o cuello halter, estampado o color entero, con volantes o camisero…<br>
							Las opciones se adaptan a todos los estilos y siluetas. ¡Elige el tuyo!
						</p>
					</div>
					<div class="col-sm-8">
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
				<p>
					<br>
				</p>
				<div id="palazos" class="row">
					<div class="col-sm-2">
						<p class="marca">
							<img src="{{url('img/palazos.png')}}" alt="" class="img-responsive">
							<br>
							Cómodo, fresco,<br>femenino e<br>inevitablemente effortless.<br>
							Un look relajado y agradable para<br>
							Las calurosas tardes que están por venir.
						</p>
					</div>
					<div class="col-sm-8">
						<span id="prev-palazos" class="atras"></span>
						<span id="next-palazos" class="siguiente"></span>
						<ul class="bxslider-palazos">
							<li><img src="{{url('img/nuevas-formas/palazos-tatienne.jpg')}}" alt="" class="center-block" /></li>
							<li><img src="{{url('img/nuevas-formas/palazos-marquis.jpg')}}" alt="" class="center-block" /></li>
							<li><img src="{{url('img/nuevas-formas/palazos-index.jpg')}}" alt="" class="center-block" /></li>
						</ul>
					</div>
				</div>
				<p>
					<br>
				</p>
				<div id="sexy-top" class="row">
					<div class="col-sm-2">
						<p class="marca">
							<img src="{{url('img/sexy-top.png')}}" alt="" class="img-responsive">
							<br>
							Cut out, shoulder off,<br>crop top o de espalda descubierta.<br>
							Existen miles de posibilidades para combinarlos, pruébalas todas y elige el ideal para ti.
						</p>
					</div>
					<div class="col-sm-8">
						<span id="prev-sexy-top" class="atras"></span>
						<span id="next-sexy-top" class="siguiente"></span>
						<ul class="bxslider-sexy-top">
							<li><img src="{{url('img/nuevas-formas/sexy-top-marquis.jpg')}}" alt="" class="center-block" /></li>
							<li><img src="{{url('img/nuevas-formas/sexy-top-navigata.jpg')}}" alt="" class="center-block" /></li>
							<li><img src="{{url('img/nuevas-formas/sexy-top-tatienne.jpg')}}" alt="" class="center-block" /></li>
						</ul>
					</div>
				</div>
				<p>
					<br>
				</p>
				<div id="enteritos" class="row">
					<div class="col-sm-2">
						<p class="marca">
							<img src="{{url('img/enteritos.png')}}" alt="" class="img-responsive">
							<br>
							Versátil, práctico y femenino.<br>
							Es la prenda esencial de este verano, puede llevarse con un estilo<br>
							casual o formal y estiliza la figura.
						</p>
					</div>
					<div class="col-sm-8">
						<span id="prev-enteritos" class="atras"></span>
						<span id="next-enteritos" class="siguiente"></span>
						<ul class="bxslider-enteritos">
							<li><img src="{{url('img/nuevas-formas/enteritos-marquis.jpg')}}" alt="" class="center-block" /></li>
							<li><img src="{{url('img/nuevas-formas/enteritos-navigata.jpg')}}" alt="" class="center-block" /></li>
							<li><img src="{{url('img/nuevas-formas/enteritos-index.jpg')}}" alt="" class="center-block" /></li>
						</ul>
					</div>
				</div>
				<p>
					<br>
				</p>
				<div id="shorts" class="row">
					<div class="col-sm-2">
						<p class="marca">
							<img src="{{url('img/shorts.png')}}" alt="" class="img-responsive">
							<br>
							Alargan las piernas, marcan la cintura y son el clásico de todos los<br>
							veranos. Los favoritos de la playa ahora invaden la ciudad.<br>
							La vida es short,<br>
							disfrútala.
						</p>
					</div>
					<div class="col-sm-8">
						<span id="prev-shorts" class="atras"></span>
						<span id="next-shorts" class="siguiente"></span>
						<ul class="bxslider-shorts">
							<li><img src="{{url('img/nuevas-formas/shorts-tatienne.jpg')}}" alt="" class="center-block" /></li>
							<li><img src="{{url('img/nuevas-formas/shorts-marquis.jpg')}}" alt="" class="center-block" /></li>
							<li><img src="{{url('img/nuevas-formas/shorts-navigata.jpg')}}" alt="" class="center-block" /></li>
						</ul>
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
<div id="maxidress-1" class="prenda">
	<img src="{{url('img/nuevas-formas/prendas/sexitop-navigata.jpg')}}" alt="">
	<div class="detalle">
		Polo Huecos<br>
		1234456<br>
		<span><small>s/.</small>59.90</span>
	</div>
</div>
@stop