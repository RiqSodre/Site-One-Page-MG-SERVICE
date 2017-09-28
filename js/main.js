//MENU ANIMATE//
$("ul.navbar-nav > li > a").on('click', function(event){
	event.preventDefault();

	$('ul.navbar-nav li').removeClass('active');
	$(this).parent().addClass('active');
	$("html, body").animate({scrollTop:$(this.hash).offset().top-50}, 1500);
})

//MENU FOLLOW//
$(window).scroll(function(){
	var scrollTopAtual = $(this).scrollTop();

	if (scrollTopAtual > 170){
		$('#navegacao').addClass('navegacao-fixa');
	}
	else{
		$('#navegacao').removeClass('navegacao-fixa');
	}
})