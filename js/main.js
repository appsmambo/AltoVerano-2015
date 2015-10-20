var altoContenedor, anchoWindow;
function home() {
	var resta;
	anchoWindow = $(window).width();
	if (anchoWindow < 768)
		resta = 20;
	else
		resta = 40;
	altoContenedor = $('.contenedor-fijo').height() - resta;
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
	$('.bxslider-maxidress').bxSlider({
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
	$('.abrir-layer').click(function() {
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
	});
});

$(function(){
	$('.toggle-nav').click(function() {
		$('body').toggleClass('show-nav'); 
		return false;
	});
	$(window).resize(function() {
		home();
	});
});