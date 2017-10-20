let linksNavBarService = $('ul.navbar-nav > li > a');
let altura = $('#navegacao').offset().top;

linksNavBarService.click(function(event){
	let position = $(this.hash).offset() ? $(this.hash).offset() : '' ;
	let heightMenu = ($(window).scrollTop() < altura) ? 110 : 60;
	event.preventDefault();

	if(!$(this.hash).offset()){
	   $('ul.navbar-nav > li').removeClass('active');
	   $(this).parent().addClass('active');
	} else {
		$('html, body').animate({scrollTop:position.top-heightMenu}, 1600);
	}
});

$(window).on('beforeunload', function() {
    $(window).scrollTop(0); 
});

$(window).scroll(function(){
	let scrollTopAtual = $(this).scrollTop();
	let navegacao = $('#navegacao');

	CheckActive();

	if ( $(window).scrollTop() > altura ) {
		navegacao.addClass('navegacao-fixa');
	}
	else {
		navegacao.removeClass('navegacao-fixa');
	}
});

function CheckActive()
{
	linksNavBarService.each(function(){
		let positionTop = $(this.hash).offset() ? $(this.hash).offset().top : 999999;

		if(positionTop-255 <= $(window).scrollTop()){
			$('ul.navbar-nav > li').removeClass('active');
			$(this).parent().addClass('active');
		}
	});
}

$('#pginicio').on('click', b = () => {
	window.location.href = "index.html";
});

$(".navbar-nav li a").click(function() {
	if ( !$(this).parent().hasClass('dropdown') ) {
  	$(".navbar-collapse").collapse('hide');
  }
});