
let linksNavBarIndex = $('ul.navbar-nav > li > a');
let altura = $('#navegacao').offset().top;

linksNavBarIndex.click(function(event){
	let position = $(this.hash).offset() ? $(this.hash).offset() : '' ;
	let heightMenu = ($(window).scrollTop() < altura) ? $('#navegacao').height()+65 : 65;
	event.preventDefault();

	if(!$(this.hash).offset()){
	   $('ul.navbar-nav > li').removeClass('active');
	   $(this).parent().addClass('active');
	} else {
		$('html, body').animate({scrollTop:position.top-heightMenu}, 1600);
	}

	var navMain = $("#navegacao");

     navMain.on("click", "a", null, function () {
         navMain.collapse('hide');
     });
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

	let scrollTop = $(document).scrollTop();
    let scrollaboutSub = $('#subtitle').offset().top - window.innerHeight + 75;
    let scrollaboutIte = $('#aboutus__itens').offset().top - window.innerHeight - 400;

    if (scrollTop > scrollaboutSub) {
    	$('#who').addClass('fade2Right');
    	$('#max').addClass('fade2Right');
    }

    if (scrollTop > scrollaboutIte) {
      	$('#aboutus__itens').addClass('fade2top');
    }
});

$(window).on('beforeunload', function() {
    $(window).scrollTop(0); 
});

function CheckActive()
{
	linksNavBarIndex.each(function(){
		let positionTop = $(this.hash).offset() ? $(this.hash).offset().top : 999999;

		if(positionTop-255 <= $(window).scrollTop()){
			$('ul.navbar-nav > li').removeClass('active');
			$(this).parent().addClass('active');
		}
	});
}

$(".navbar-nav li a").click(function() {
	if ( !$(this).parent().hasClass('dropdown') ) {
  	$(".navbar-collapse").collapse('hide');
  }
});

$('#slider').owlCarousel({
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true
});
