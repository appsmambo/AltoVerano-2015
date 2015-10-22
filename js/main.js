var altoContenedor, anchoWindow;
var sliderMaxiDress;

function home() {
	var resta = 0;
	anchoWindow = $(window).width();
	if (anchoWindow >= 768)
		resta = 40;
	altoContenedor = parseInt($('.contenedor-fijo').height()) - resta;
	$('.home .borde').css('padding-top', altoContenedor + 'px');
}

$(window).load(function(){
	$('#banner').nivoSlider({
		effect:"boxRandom",
		slices:15,
		boxCols:8,
		boxRows:4,
		animSpeed:500,
		pauseTime:3000,
		startSlide:0,
		directionNav:false,
		controlNav:false,
		controlNavThumbs:false,
		pauseOnHover:true,
		manualAdvance:false
	});
	$('.bxslider').bxSlider({
		pager:false,
		maxSlides:4,
		moveSlides:1,
		slideWidth:150,
		nextSelector:'#slider-next',
		prevSelector:'#slider-prev',
		nextText:'',
		prevText:''
	});
	$('.bxslider-marcas').bxSlider({
		auto:true,
		pager:false,
		controls:false,
		maxSlides:1,
		moveSlides:1
	});
	sliderMaxiDress = $('.bxslider-maxidress').bxSlider({
		pager:false,
		maxSlides:3,
		moveSlides:1,
		slideWidth:180,
		nextSelector:'#next-maxidress',
		prevSelector:'#prev-maxidress',
		nextText:'',
		prevText:''
	});
	$('.bxslider-palazos').bxSlider({
		pager:false,
		maxSlides:3,
		moveSlides:1,
		slideWidth:180,
		nextSelector:'#next-palazos',
		prevSelector:'#prev-palazos',
		nextText:'',
		prevText:''
	});
	$('.bxslider-sexy-top').bxSlider({
		pager:false,
		maxSlides:3,
		moveSlides:1,
		slideWidth:180,
		nextSelector:'#next-sexy-top',
		prevSelector:'#prev-sexy-top',
		nextText:'',
		prevText:''
	});
	$('.bxslider-enteritos').bxSlider({
		pager:false,
		maxSlides:3,
		moveSlides:1,
		slideWidth:180,
		nextSelector:'#next-enteritos',
		prevSelector:'#prev-enteritos',
		nextText:'',
		prevText:''
	});
	$('.bxslider-shorts').bxSlider({
		pager:false,
		maxSlides:3,
		moveSlides:1,
		slideWidth:180,
		nextSelector:'#next-shorts',
		prevSelector:'#prev-shorts',
		nextText:'',
		prevText:''
	});
	$('.bxslider-marquis').bxSlider({
		pager:false,
		maxSlides:2,
		moveSlides:1,
		slideWidth:190,
		slideMargin:15,
		nextSelector:'#next-marquis',
		prevSelector:'#prev-marquis',
		nextText:'',
		prevText:''
	});
	$('.bxslider-cacharel').bxSlider({
		pager:false,
		maxSlides:2,
		moveSlides:1,
		slideWidth:190,
		slideMargin:15,
		nextSelector:'#next-cacharel',
		prevSelector:'#prev-cacharel',
		nextText:'',
		prevText:''
	});
	$('.bxslider-index').bxSlider({
		pager:false,
		maxSlides:2,
		moveSlides:1,
		slideWidth:190,
		slideMargin:15,
		nextSelector:'#next-index',
		prevSelector:'#prev-index',
		nextText:'',
		prevText:''
	});
	$('.bxslider-minimal').bxSlider({
		pager:false,
		maxSlides:3,
		moveSlides:1,
		slideWidth:180,
		nextSelector:'#next-minimal',
		prevSelector:'#prev-minimal',
		nextText:'',
		prevText:''
	});
	$('.bxslider-gladiadoras').bxSlider({
		pager:false,
		maxSlides:3,
		moveSlides:1,
		slideWidth:180,
		nextSelector:'#next-gladiadoras',
		prevSelector:'#prev-gladiadoras',
		nextText:'',
		prevText:''
	});
	$('.bxslider-deportivos').bxSlider({
		pager:false,
		maxSlides:3,
		moveSlides:1,
		slideWidth:180,
		nextSelector:'#next-deportivos',
		prevSelector:'#prev-deportivos',
		nextText:'',
		prevText:''
	});
	$('.bxslider-theuglyshoes').bxSlider({
		pager:false,
		maxSlides:3,
		moveSlides:1,
		slideWidth:180,
		nextSelector:'#next-theuglyshoes',
		prevSelector:'#prev-theuglyshoes',
		nextText:'',
		prevText:''
	});
	$('.bxslider-masculine').bxSlider({
		pager:false,
		maxSlides:3,
		moveSlides:1,
		slideWidth:180,
		nextSelector:'#next-masculine',
		prevSelector:'#prev-masculine',
		nextText:'',
		prevText:''
	});
	$('.bxslider-minibag').bxSlider({
		pager:false,
		maxSlides:3,
		moveSlides:1,
		slideWidth:180,
		nextSelector:'#next-minibag',
		prevSelector:'#prev-minibag',
		nextText:'',
		prevText:''
	});
	$('.bxslider-suecos').bxSlider({
		pager:false,
		maxSlides:3,
		moveSlides:1,
		slideWidth:180,
		nextSelector:'#next-suecos',
		prevSelector:'#prev-suecos',
		nextText:'',
		prevText:''
	});
	$('.bxslider-alpargatas').bxSlider({
		pager:false,
		maxSlides:3,
		moveSlides:1,
		slideWidth:180,
		nextSelector:'#next-alpargatas',
		prevSelector:'#prev-alpargatas',
		nextText:'',
		prevText:''
	});
	$('.bxslider-blancos').bxSlider({
		pager:false,
		maxSlides:3,
		moveSlides:1,
		slideWidth:180,
		nextSelector:'#next-blancos',
		prevSelector:'#prev-blancos',
		nextText:'',
		prevText:''
	});
	$('.bxslider-pasteles').bxSlider({
		pager:false,
		maxSlides:3,
		moveSlides:1,
		slideWidth:180,
		nextSelector:'#next-pasteles',
		prevSelector:'#prev-pasteles',
		nextText:'',
		prevText:''
	});
	home();
});

$(function(){
	$('.toggle-nav').click(function() {
		$(this).toggleClass('cerrar');
		$('body').toggleClass('show-nav');
		return false;
	});
	$('body').on('click', 'a.abrir-layer', function() {
	//$('').click(function() {
		var bloque;
		bloque = $(this).data('bloque');
		$.fancybox({
			padding:0,
			margin:0,
			type:'inline',
			href:bloque,
			maxWidth:320,
			maxHeight:571,
			fitToView:true,
			autoSize:false,
			closeClick:false,
			scrolling:'no'
		});
		return false;
	});
	$('.abrir-look').click(function() {
		var bloque;
		bloque = $(this).data('bloque');
		$.fancybox({
			padding:0,
			margin:0,
			type:'inline',
			href:bloque,
			maxWidth:478,
			maxHeight:478,
			fitToView:true,
			autoSize:false,
			closeClick:false,
			scrolling:'no'
		});
		return false;
	});
	$('.abrir-sandalias').click(function() {
		var bloque;
		bloque = $(this).data('bloque');
		$.fancybox({
			padding:0,
			margin:0,
			type:'inline',
			href:bloque,
			maxWidth:320,
			maxHeight:450,
			fitToView:true,
			autoSize:false,
			closeClick:false,
			scrolling:'no'
		});
		return false;
	});
	$('.top5 .boton').click(function() {
		var bloque = $(this).data('bloque');
		$(this).toggleClass('cerrar');
		$('.bx-viewport').css('height', 'auto');
		$(bloque).slideToggle('slow');
	});
	$(window).resize(function() {
		home();
	});
});
