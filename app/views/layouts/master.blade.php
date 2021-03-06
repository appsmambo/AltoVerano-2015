<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>{{$titulo}}</title>
		<meta name="description" content="{{$descripcion}}">
		<link rel="canonical" href="{{url()}}/">
		<meta property="og:site_name" content="Yo Elijo Verano">
		<meta property="og:title" content="{{$titulo}}">
		<meta property="og:type" content="website">
		<meta property="og:url" content="{{url()}}/">
		<meta property="og:image" content="{{url('img/compartir.jpg')}}">
		<meta property="og:locale" content="es_LA">
		<meta property="og:description" content="{{$descripcion}}">
		<link rel="shortcut icon" href="{{url('favicon.ico')}}">
		<link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
		<link href="{{url('css/nivo-slider.css')}}" rel="stylesheet">
		<link href="{{url('css/jquery.bxslider.css')}}" rel="stylesheet">
		<link href="{{url('css/jquery.fancybox.css')}}" rel="stylesheet">
		<link href="{{url('css/main.css?v=12')}}" rel="stylesheet">
		@yield('estilos')
		<script src="{{url('js/queryloader2.min.js')}}"></script>
		<script type="text/javascript">
			window.addEventListener('DOMContentLoaded', function() {
				new QueryLoader2(document.querySelector("body"), {
					barColor:"#ffffff",
					backgroundColor:"#000",
					percentage:false,
					barHeight:1,
					minimumTime:200,
					maxTime:25000,
					fadeOutTime:1250,
					onComplete:function(){
						$(window).trigger('resize');
					}
				});
			});
			var baseUrl = '{{url()}}';
		</script>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script src="{{url('js/jquery.min.js')}}"></script>
		<script src="{{url('js/bootstrap.min.js')}}"></script>
		<script src="{{url('js/jquery.nivo.slider.pack.js')}}"></script>
		<script src="{{url('js/jquery.bxslider.min.js')}}"></script>
		<script src="{{url('js/jquery.fancybox.pack.js')}}"></script>
		<script src="{{url('js/main.js?v=10')}}"></script>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-50197344-4', 'auto');
			ga('require', 'displayfeatures');
			ga('send', 'pageview');
		</script>
	</head>
	<body class="{{$clase}}">
		<h1 class="hidden">
			Alto Verano
		</h1>
		<nav id="body-nav">
			<ul>
				<li>
					<a href="{{url('tu-look-por-menos')}}" class="{{ (Route::current()->getName() == 'tuLook') ? 'active' : '' }}">
						tu look por menos
					</a>
				</li>
				<li>
					<a href="{{url('top-5-del-verano')}}" class="{{ (Route::current()->getName() == 'top5') ? 'active' : '' }}">
						top 5 del verano
					</a>
				</li>
				<li>
					<a href="http://facebook.com/ripleyperu" target="_blank">
						<img src="{{url('img/social-facebook.png')}}" alt="facebook">
					</a>
					<a href="https://www.youtube.com/channel/UCcy8eiFOUYAxYSABOSjGHqA" target="_blank">
						<img src="{{url('img/social-youtube.png')}}" alt="youtube">
					</a>
					<a href="http://twitter.com/ripleyenperu" target="_blank">
						<img src="{{url('img/social-twitter.png')}}" alt="twitter">
					</a>
					<a href="http://instagram.com/ripleyperu" target="_blank">
						<img src="{{url('img/social-instagram.png')}}" alt="instagram">
					</a>
					<a href="http://pinterest.com/ripleyperu" target="_blank">
						<img src="{{url('img/social-pinterest.png')}}" alt="pinterest">
					</a>
				</li>
			</ul>
		</nav>
		<div class="site-wrap">
			<div class="push-wrap">
				<a href="#" class="toggle-nav visible-xs"></a>
				<div id="content">
					<header>
						<section class="container">
							<div class="row vertical-align">
								<div class="col-xs-12 col-sm-4">
									<a href="{{url()}}" class="logo">
										<img src="{{url('img/logo.png')}}" alt="" class="img-responsive pull-left hidden-xs hidden-sm">
										<img src="{{url('img/logo-mobile.png')}}" alt="" class="img-responsive pull-left visible-xs visible-sm">
									</a>
								</div>
								<div class="hidden-xs col-sm-8">
									<p class="text-right menu">
										<a href="{{url('tu-look-por-menos')}}" class="{{ (Route::current()->getName() == 'tuLook') ? 'active' : '' }}">
											tu look por menos
										</a>
										<a href="{{url('top-5-del-verano')}}" class="{{ (Route::current()->getName() == 'top5') ? 'active' : '' }}">
											top 5 del verano
										</a>
									</p>
								</div>
							</div>
						</section>
					</header>
					<div class="clearfix"></div>
					<section class="container">
						@yield('contenido')
					</section>
					<div class="clearfix"></div>
					<footer class="hidden-xs">
						<section class="container">
							<p class="text-center">
								<a href="http://facebook.com/ripleyperu" target="_blank">
									<img src="{{url('img/social-facebook.png')}}" alt="facebook">
								</a>
								<a href="https://www.youtube.com/channel/UCcy8eiFOUYAxYSABOSjGHqA" target="_blank">
									<img src="{{url('img/social-youtube.png')}}" alt="youtube">
								</a>
								<a href="http://twitter.com/ripleyenperu" target="_blank">
									<img src="{{url('img/social-twitter.png')}}" alt="twitter">
								</a>
								<a href="http://instagram.com/ripleyperu" target="_blank">
									<img src="{{url('img/social-instagram.png')}}" alt="instagram">
								</a>
								<a href="http://pinterest.com/ripleyperu" target="_blank">
									<img src="{{url('img/social-pinterest.png')}}" alt="pinterest">
								</a>
							</p>
						</section>
					</footer>
				</div>
			</div>
		</div>
		<div class="hidden">
			<img src="{{url('img/nuevas-formas/prendas/sexitop-navigata.jpg')}}" alt="">
			@yield('contenido-dinamico')
		</div>
	</body>
</html>