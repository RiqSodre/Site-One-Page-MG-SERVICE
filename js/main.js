var linksNavBar = $("ul.navbar-nav > li > a");
var altura = $('#navegacao').offset().top;

linksNavBar.click(function(event){
	var position = $(this.hash).offset() ? $(this.hash).offset() : '' ;
	var heightMenu = ($(window).scrollTop() < altura) ? 100 : 65;
	event.preventDefault();

	if(!$(this.hash).offset()){
	   $('ul.navbar-nav > li').removeClass('active');
	   $(this).parent().addClass('active');
	} else {
		$("html, body").animate({scrollTop:position.top-heightMenu}, 1200);
	}
});

$(window).scroll(function(){
	var scrollTopAtual = $(this).scrollTop();
	var navegacao = $('#navegacao');

	CheckActive();

	if ( $(window).scrollTop() > altura ) {
		navegacao.addClass('navegacao-fixa');
	}
	else {
		navegacao.removeClass('navegacao-fixa');
	}
});

$("#slider").owlCarousel({
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true
});

function CheckActive()
{
	linksNavBar.each(function(){
		var positionTop = $(this.hash).offset() ? $(this.hash).offset().top : 999999;

		if(positionTop-250 <= $(window).scrollTop()){
			$('ul.navbar-nav > li').removeClass('active');
			$(this).parent().addClass('active');
		}
	});
}