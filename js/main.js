let linksNavBar = $('ul.navbar-nav > li > a');
let altura = $('#navegacao').offset().top;
let aboutSubTrue = false;
let aboutIteTrue = false;

linksNavBar.click(function(event){
	let position = $(this.hash).offset() ? $(this.hash).offset() : '' ;
	let heightMenu = ($(window).scrollTop() < altura) ? 115	 : 65;
	event.preventDefault();

	if(!$(this.hash).offset()){
	   $('ul.navbar-nav > li').removeClass('active');
	   $(this).parent().addClass('active');
	} else {
		$('html, body').animate({scrollTop:position.top-heightMenu}, 1600);
	}
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
    let scrollaboutIte = $('#aboutus__itens').offset().top - window.innerHeight;

    if (scrollTop > scrollaboutSub && aboutSubTrue === false) {
      aboutSubTrue = true;
      $('#sub_h1').animate({'margin-left': '-50px'}, 1, null, () => {
      		$('#sub_h1').animate({'margin-left': '0%',
	        	'opacity': "1"}, 1000);
      	});
      $('#sub_max').animate({'margin-left': '-200px'}, 1, null, () => {
      		$('#sub_max').animate({'margin-left': '3%',
	        	'opacity': '1'}, 1000);
      	});
    }

    if (scrollTop > scrollaboutIte && aboutIteTrue === false) {
      aboutIteTrue = true;
      $('#aboutus__itens').animate({'margin-top': '500px'}, 1, null, () => {
      		$('#aboutus__itens').animate({'margin-top': '-10px',
	        	'opacity': '1'}, 1000);
      	});
    }
});

$('#slider').owlCarousel({
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true
});

function CheckActive()
{
	linksNavBar.each(function(){
		let positionTop = $(this.hash).offset() ? $(this.hash).offset().top : 999999;

		if(positionTop-255 <= $(window).scrollTop()){
			$('ul.navbar-nav > li').removeClass('active');
			$(this).parent().addClass('active');
		}
	});
}