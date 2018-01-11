<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>EZSOL - Easy Solutions &mdash; </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive"
	/>
	<meta name="author" content="gettemplates.co" />


	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'> -->

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>
		<?php
		//variaveis
		$servidor = "localhost";
		$usuario = "root";
		$senha = "";
		$banco = "mydb";

		//criando conexão com banco
		$conexao = new mysqli ("localhost","root","");

		//verificar conexão com banco
		if($conexao -> connect_error)
		{
			die ("Erro na Conexão: ". $conexao -> connect_error);
		}
	?>
	<div class="gtco-loader"></div>

	<div id="page">
		<nav class="gtco-nav" role="navigation">
			<div class="gtco-container">
				<div class="row">
					<div class="col-xs-2">
						<div id="gtco-logo">
							<a href="index.php">EZSOL</a>
						</div>
					</div>
					<div class="col-xs-8 text-center menu-1">
						<ul>
							<li>
								<a href="index.php">Home</a>
							</li>
							<li>
								<a href="about.php">Sobre Nós</a>
							</li>
							<li class="has-dropdown">
								<a>Clientes e Equipe</a>
								<ul class="dropdown">
									<li>
										<a href="index.php#Testemunho">Clientes Satisfeitos</a>
									</li>
									<li>
										<a href="about.php#NossaEquipe">Nossa Equipe</a>
									</li>

								</ul>
							</li>
							<li>
								<a href="contact.php">Contato</a>
							</li>
						</ul>
					</div>
					<div class="col-xs-2 text-right hidden-xs menu-2">
						<ul>
							<li class="btn-cta">
								<a data-toggle="modal" data-target="#modalLogin">
									<span>Login</span>
								</a>
							</li>
						</ul>
					</div>
				</div>

			</div>
		</nav>
		<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image:url(images/img_bg_1.jpg);">

			<div class="gtco-container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="display-t">
							<div class="display-tc animate-box" data-animate-effect="fadeIn">
								<h1>
									<img id="logo" src="images/EZSOL_T.png"> </h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="gtco-section">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-6 animate-box">
						<h3>Fale Conosco</h3>
						<form action="#">
							<div class="row form-group">
								<div class="col-md-6">
									<label for="fname">Primeiro Nome</label>
									<input type="text" id="fname" class="form-control" placeholder="Primeiro Nome">
								</div>
								<div class="col-md-6">
									<label for="lname">Sobrenome</label>
									<input type="text" id="lname" class="form-control" placeholder="Sobrenome">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="email">Email</label>
									<input type="text" id="email" class="form-control" placeholder="Endereço de Email">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="subject">Assunto</label>
									<input type="text" id="subject" class="form-control" placeholder="Assunto">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="message">Mensagem</label>
									<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Digite aqui sua mensagem."></textarea>
								</div>
							</div>
							<div class="form-group">
								<input type="submit" value="Enviar" class="btn btn-primary">
							</div>

						</form>
					</div>
					<div class="col-md-5 col-md-push-1 animate-box">

						<div class="gtco-contact-info">
							<h3>Informações de Contato</h3>
							<ul>
								<li class="address">Rua Rio Branco, 1780
									<br> Salto/São Paulo - 13320-270</li>
								<li class="phone">+5511 99792-6955</li>
								<li class="email">centralezsol@ezsol.com.br</li>
								<li class="url">
									<a href="http://www.vagas.com.br" target="_blank">Trabalhe Conosco</a>
								</li>
							</ul>
						</div>

					</div>
				</div>

			</div>
		</div>

		<div class="gtco-cover gtco-cover-sm" style="background-image:url(images/img_bg_3.jpg);">
			<div class="overlay"></div>
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="display-t">
							<div class="display-tc animate-box" data-animate-effect="fadeIn">
								<h1>Seja Simples Como EZSOL.</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>



		<footer id="gtco-footer" role="contentinfo">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-4 gtco-widget">
						<h3>A Easy Solutions</h3>
						<p>Empresa desenvolvedora de sistemas inteligentes.</p>
						<p>
							<a href="about.html">Saiba Mais</a>
						</p>
					</div>
					<div class="col-md-2 col-md-push-1">
						<ul class="gtco-footer-links">
							<li>
								<a href="about.html#NossaEquipe">Equipe</a>
							</li>
						</ul>
					</div>

					<div class="row copyright">
						<div class="col-md-12">
							<p class="pull-left">

							</p>
							<p class="pull-right">
								<ul class="gtco-social-icons pull-right">
									<li>
										<a href="https://twitter.com/" target="_blank">
											<i class="icon-twitter"></i>
										</a>
									</li>
									<li>
										<a href="https://www.facebook.com/" target="_blank" "><i class="icon-facebook "></i></a></li>
							<li><a href="https://br.linkedin.com/ " target="_blank "><i class="icon-linkedin "></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

			<div class="row copyright ">
			</div>

		</div>
		
	<div class="modal " id="modalLogin " tabindex="-1 " role="dialog ">
		<div class="modal-dialog " role="dialog ">
			<div class="modal-content ">
				<div class="modal-header ">
					<h2 class="modal-title ">Login</h2>
					<button type="button " class="close " data-dismiss="modal " aria-label="Close ">
					<span aria-hidden="true ">&times;</span>
					</button>
				</div>
			<div class="modal-body ">
				<form class="form-inline ">
					<div class="form-group ">
						<label for="inputName ">E-mail</label></br>
						<input type="text " class="form-control ">
					</div>
				<div>
					<label for="inputName ">Senha</label></br>
					<input type="password " class="form-control ">				
				</div>
				</form>
			</div>
			<div class="modal-footer ">
				<button type="button " class="btn btn-primary ">Log</button>
				<button type="button " class="btn btn-secondary " data-dismiss="modal ">Fechar</button>
			</div>
			</div>
		</div>
	</div>
		
	
	</div>

	<div class="gototop js-top ">
		<a href="# " class="js-gotop "><i class="icon-arrow-up "></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js "></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js "></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js "></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js "></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js "></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js "></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js "></script>
	<script src="js/magnific-popup-options.js "></script>
	<!-- Main -->
	<script src="js/main.js "></script>

	</body>
</html>