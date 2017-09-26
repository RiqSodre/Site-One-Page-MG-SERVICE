$("ul.navbar-nav > li > a").on('click', function(event){
	event.preventDefault();
	$("html, body").animate({scrollTop:$(this.hash).offset().top}, 1200);
})
