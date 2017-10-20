<?php
	if($_SERVER["HTTPS"] != "on")
	{
	    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
	    exit();
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Serviços</title>
	<meta name="description" content="MG SERVICE, Segurança, Portaria, Limpeza, Zeladoria, Recepção e Jardinagem.">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<script src="https://use.fontawesome.com/7bbbae59e5.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Oxygen:300,400,700" rel="stylesheet">
	<script src="js/vendors/jquery/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="css/vendors/plugins.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="shortcut icon" href="images/favicon.ico">
</head>
<body>
	<header id="top" class="container"> 	
		<div class="content">
			<div class="logo-container">
				<div class="logo-container__logo">
					<a href="http://grupomgservice.com.br/">
						<img src="images/logo.png" class="img-responsive" alt="#">
					</a>
				</div>
			</div>	
		</div>
	</header>
	<div id="navegacao">
		<div class="container">
			<div class="content">
				<div id="navegacao__content">
					<nav class="navbar navbar-default">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							    <span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
									<li><a id="pginicio" href="#">Inicio</a></li>
							        <li><a href="#pt">Portaria</a></li>
							        <li><a href="#rp">Recepção</a></li>
							        <li><a href="#lp">Limpeza</a></li>
							        <li><a href="#jd">Jardinagem</a></li>
							        <li><a href="#zd">Zeladoria</a></li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<div id="slider" class="owl-carousel owl-theme">	
		<div class="item">
		    <img src="images/bgservicos.png" alt="MG SERVICE">
		</div>
	</div>
	<div class="faixa"></div>
	<section class="container" id="pgservicos">
		<header class="content" id="title">
			<h2 class="heading">
				<span></span>
				Nossos Serviços
			</h2>
		</header>
		<div class="services">
			<div class="servico_item" id="pt">
				<h1>PORTARIA</h1>
				<div class="faixa"></div>
				<p>O porteiro tem como função recepcionar os moradores, visitantes, funcionários e prestadores de serviços. Os porteiros são profissionais de extrema confiança, escolhidos por meio de um processo seletivo rigoroso. Nossos profissionais passam por um treinamento qualificado para suprir as necessidades de cada cliente, com supervisionamento cauteloso e constante.
				</p>
				<img id="img" src="images/pt.png">
			</div>
			<div class="servico_item" id="rp">
				<h1>RECEPÇÃO</h1>
				<div class="faixa"></div>
				<p>A recepcionista é a profissional responsável por atuar com o atendimento ao publico. Atender e filtrar ligações, anotar recados, receber e orientar visitas, arquivar documentos, esclarecer duvidas, são algumas das funções exercidas. Com um enfoque na agilidade e praticidade, nossas recepcionistas buscam a satisfação das pessoas com a qualidade de atendimento necessária, além de serem profissionais altamente qualificadas, com conhecimentos em informática, boa dicção e experiência na área.
				</p>
				<img id="img" id="img" src="images/rp.png">
			</div>
			<div class="servico_item" id="lp">
				<h1>LIMPEZA</h1>
				<div class="faixa"></div>
				<p>O profissional da limpeza cuida da higienização de todos os ambientes do local de trabalho, garantindo sempre uma sensação de bem-estar e segurança. A MG SERVICE trabalha com profissionais capacitados, educados, e com exelente comprometimento com a limpeza, com a organização e com a satisfação do cliente, além de equipamentos modernos e produtos de qualidade. Nós cuidamos do seu ambiente, para que você se preocupe somente com o seu negócio.
				</p>
				<img id="img" id="img" src="images/lp.png">
			</div>
			<div class="servico_item" id="jd">
				<h1>JARDINAGEM</h1>
				<div class="faixa"></div>
				<p>A função exercida pelo jardineiro é de preservar todas as áreas verdes de sua empresa ou condomínio. Os serviços de manutenção de jardins, levam em conta a periodicidade e necessidades peculiares de cada caso, também atuamos para satisfazer as modificações desejadas pelo cliente. As tarefas são realizadas por profissionais experientes e que utilizam de todas as ferramentas necessárias. A MG SERVICE garante um serviço de alta qualidade e que, com asseveração, irá transfigurar o recinto de sua empresa ou condomínio.
				</p>
				<img id="img" id="img" src="images/jd.png">
			</div>
			<div class="servico_item" id="zd">
				<h1>ZELADORIA</h1>
				<div class="faixa"></div>
				<p>O profissional da zeladoria é bastante solicitado por aqueles que buscam por um profissional de alto nível com ótimo custo-benefício. A terceirização de um zelador assegura a presença de alguém com responsabilidade para atuar com perfeição em diversas vertentes. Além de sempre zelar pela segurança do seu empreendimento, o zelador é um profissional capaz de acatar e controlar a circulação de pessoas e veículos, receber objetos, mercadorias, matérias e equipamentos, e de realizar pequenos reparos.
				</p>
				<img id="img" src="images/zd.png">
			</div>
		</div>
	</section>
	
	<div class="barra"></div>
	<footer id="footer">
		<div class="container">	
			<div class="content" id="footer-sidebar">
				<div class="footer-widget footer-widget--about">
					<h4 class="widget__title">
						<span></span> Empresa:
					</h4>
					<a href="" title="MG Service">
						<a href="http://grupomgservice.com.br/">
							<img src="images/logo.png" class="img-responsive" alt="" title="MG Service">
						</a>
					</a>
					<p>
						A MG Service é uma empresa de terceirizações de serviços, que disponibiliza e desenvolve soluções operacionais nas áreas de portaria, limpeza, recepção entre outras.
					</p>
				</div>
				<div class="footer-widget footer-widget--about">
					<h4 class="widget__title">
						<span></span> Facebook:
					</h4>
					<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fgivamonteiroconsultordeseguranca%2F&tabs&width=340&height=214&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" height="215px" style="border:none; overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" data-adapt-container-width="true"></iframe>
				</div>
				<div class="footer-widget footer-widget--about">
					<h4 class="widget__title">
						<span></span> Localização:
					</h4>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.619006391517!2d-47.457268485483546!3d-23.47420356426341!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c5f55980555ec1%3A0xbc4ea20f59f8f8f8!2sCondom%C3%ADnio+Residencial+Planalto+-+R.+Jo%C3%A3o+Ribeiro+de+Barros%2C+1000+-+Vila+Odim+Matadour%2C+Sorocaba+-+SP%2C+18080-180!5e0!3m2!1spt-BR!2sbr!4v1506692405412" width="180px" height="213px" frameborder="0" style="border:0" allowfullscreen="true"></iframe>
					R. João Ribeiro de Barros, 1000 - Vila Odim Matadour
					Sorocaba - SP
					18080-180
				</div>
			</div>
		</div>
			<div class="direitos">
				<div class="container">
					<div class="content">
						<p>Todos os Direitos Reservados © - 2017 - MG SERVICE | CNPJ.: 18.765.447/0001-17 | Givanildo Monteiro | Versão 1.0 </p>
						<p>Design e Desenvolvimento por: <a href="https://www.facebook.com/EssentialsTech/">Essentials Technology</a></p>
					</div>
				</div>
			</div>
	</footer>
	<script src="js/pgservicos.js"></script>
	<script src="js/vendors/bootstrap/bootstrap.min.js"></script>
</body>
</html>