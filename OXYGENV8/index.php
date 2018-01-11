<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>EZSOL - Easy Solutions &mdash;</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">


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
	</head>

	<body>

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
											<a href="#">Nossa Equipe</a>
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

			<header id="gtco-header" class="gtco-cover" role="banner" style="background-image:url(images/img_bg_1.jpg);">
				<div class="gtco-container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center">
							<div class="display-t">
								<div class="display-tc animate-box" data-animate-effect="fadeIn">
									<h1>
										<img id="logo" src="images/EZSOL_T.png"> </h1>
									<br></br>
									<ul>
										<li class="btn btn-default">
											<a data-toggle="modal" data-target="#modalOrcamento">
												<span>Solicite um Orçamento</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<div id="gtco-features-2">
				<div class="gtco-container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
							<h2>Porque nos escolheram?</h2>
							<p>A EZSOL oferece, todo um suporte ao seu usuário e garantia de um software totalmente funcional. </p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
								<span class="icon">
									<i class="icon-check"></i>
								</span>
								<div class="feature-copy">
									<h3>Confiabilidade.</h3>
									<p>Os Dados são todos protegidos em nosso Software.</p>
								</div>
							</div>
							<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
								<span class="icon">
									<i class="icon-check"></i>
								</span>
								<div class="feature-copy">
									<h3>Total Suporte.</h3>
									<p>Oferecemos suporte 24 Horas ao nosso cliente.</p>
								</div>
							</div>

							<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
								<span class="icon">
									<i class="icon-check"></i>
								</span>
								<div class="feature-copy">
									<h3>Simples Uso.</h3>
									<p>As funcionalidades são simples e totalmente direcionado ao usuário.</p>
								</div>
							</div>

						</div>

					</div>
				</div>
			</div>

			<div id="gtco-counter" class="gtco-bg gtco-counter" style="background-image:url(images/img_bg_2.jpg);">
				<div class="gtco-container">
					<div class="row">
						<div class="display-t">
							<div class="display-tc">
								<div class="col-md-3 col-sm-6 animate-box">
									<div class="feature-center">
										<span class="icon">
											<i class="icon-eye"></i>
										</span>

										<span class="counter js-counter" data-from="0" data-to="500" data-speed="5000" data-refresh-interval="50">1</span>
										<span class="counter-label">Visitantes</span>

									</div>
								</div>
								<div class="col-md-3 col-sm-6 animate-box">
									<div class="feature-center">
										<span class="icon">
											<i class="icon-anchor"></i>
										</span>

										<span class="counter js-counter" data-from="0" data-to="97" data-speed="5000" data-refresh-interval="50">1</span>
										<span class="counter-label">Clientes Satisfeitos.</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6 animate-box">
									<div class="feature-center">
										<span class="icon">
											<i class="icon-briefcase"></i>
										</span>
										<span class="counter js-counter" data-from="0" data-to="402" data-speed="5000" data-refresh-interval="50">1</span>
										<span class="counter-label">Projeção de Uso</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6 animate-box">
									<div class="feature-center">
										<span class="icon">
											<i class="icon-clock"></i>
										</span>

										<span class="counter js-counter" data-from="0" data-to="600" data-speed="5000" data-refresh-interval="50">1</span>
										<span class="counter-label">Horas de Uso</span>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="gtco-testimonial">
				<div class="gtco-container">
					<!-- <div class="row"> -->
					<div class="row animate-box">
						<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
							<h2 id="Testemunho">Testemunhos</h2>
						</div>
					</div>
					<div class="row animate-box">


						<div class="owl-carousel owl-carousel-fullwidth ">
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="images/Testemunhas.png" alt="user">
									</figure>
									<span>Jeová, via
										<a href="https://www.twitter.com" target="blank" class="twitter">Twitter</a>
									</span>
									<blockquote>
										<p>&ldquo;Software, muito funcional, intuitivo e prático. É pra glorificar de pé&rdquo;</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="images/faustao.jpg" alt="user">
									</figure>
									<span>Faustão, via
										<a href="https://www.twitter.com" target="blank" class="twitter">Twitter</a>
									</span>
									<blockquote>
										<p>&ldquo;Software tão bom, que puta vida!&rdquo;</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="images/jaja.png" alt="user">
									</figure>
									<span>Jailson Mendes, via
										<a href="https://www.twitter.com" target="blank">Twitter</a>
									</span>
									<blockquote>
										<p>&ldquo;Delicia de Software &rdquo;</p>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
					<!-- </div> -->
				</div>
			</div>

			<div id="gtco-services">
				<div class="gtco-container">

					<div class="row animate-box">
					</div>

					<div class="row animate-box">

						<div class="gtco-tabs">
							<ul class="gtco-tab-nav">
								<li class="active">
									<a href="#" data-tab="1">
										<span class="icon visible-xs">
											<i class="icon-command"></i>
										</span>
										<span class="hidden-xs">Design</span>
									</a>
								</li>
								<li>
									<a href="#" data-tab="3">
										<span class="icon visible-xs">
											<i class="icon-bag"></i>
										</span>
										<span class="hidden-xs">Suporte 24 Horas</span>
									</a>
								</li>
							</ul>

							<!-- Tabs -->
							<div class="gtco-tab-content-wrap">

								<div class="gtco-tab-content tab-content active" data-tab-content="1">
									<div class="col-md-6">
										<img id="intuitivo" src="images/ptr2.jpg" />
									</div>
									<div class="col-md-6">
										<h2>Design Intuitivo</h2>
										<p>Utilizando de uma interface simples e que agrada ao usuário, o EZSOL vem para mostrar que pode substituir os sistemas
											do mercado atual de informática.</p>

										<p>O Software contém atualizações precisas de acordo com o Log dos nossos usuários.</p>

									</div>
								</div>

								<div class="gtco-tab-content tab-content" data-tab-content="3">
									<div class="col-md-6">
										<div class="icon icon-xlg">
											<i class="icon-bag"></i>
										</div>
									</div>
									<div class="col-md-6">
										<h2>Suporte 24 Horas.</h2>
										<p>Oferecemos uma assistência 24 Horas a todos nossos usuários, podemos ser contatados por meio de e-mail, telefones
											e atendimento ao local.</p>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>

			<div id="gtco-started">
				<div class="gtco-container">
					<div class="row animate-box">
						<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
							<h2>Vamos Começar?</h2>
						</div>
					</div>
					<div class="row animate-box">
						<div class="col-md-12">
							<form class="form-inline">
								<div class="col-md-4 col-sm-4">
									<div class="form-group">
										<label for="email" class="sr-only">Email</label>
										<input type="email" class="form-control" id="email" placeholder="Email">
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<div class="form-group">
										<label for="password" class="sr-only">Senha</label>
										<input type="password" class="form-control" id="password" placeholder="Password">
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<button type="submit" class="btn btn-default btn-block">Cadastrar</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

			<footer id="gtco-footer" role="contentinfo">
				<div class="gtco-container">
					<div class="row row-pb-md">
						<div class="col-md-4 gtco-widget">
							<h3>A Easy Solutions</h3>
							<p>Empresa desenvolvedora de sistemas inteligentes</p>
							<p>
								<a href="#">Saiba Mais</a>
							</p>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
							<ul class="gtco-footer-links">
								<li>
									<a href="about.html#NossaEquipe">Equipe</a>
								</li>
							</ul>
						</div>

					</div>

					<div class="row copyright">
						<div class="col-md-12">
							<p class="pull-right">
								<ul class="gtco-social-icons pull-right">
									<li>
										<a href="#">
											<i class="icon-twitter"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="icon-facebook"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="icon-linkedin"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="icon-dribbble"></i>
										</a>
									</li>
								</ul>
							</p>
						</div>
					</div>

				</div>
			</footer>

			//MODAL ORÇAMENTO
			<div class="modal" id="modalOrcamento" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h2 class="modal-title">Orçamento</h2>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form method="post" action="enviar.php">
								<div class="form-group">

									<option value="Suporte">Suporte</option>									
										<select name="suporte">
											<option value="Semanal">Semanal R$ 150,00</option>
											<option value="Mensal">Mensal R$ 200,00</option>
											<option value="24Horas">24 Horas R$ 400,00</option>
											<option value="Anual">Anual R$ 100,00</option>
										</select>
										<br>
										<br>
									
								</div>
								<div>

								<option value="Suporte">Licença</option>
								<select name="preco">
																	<option value="150">Valor R$150,00</option>
																	<option value="200">Valor R$200,00</option>
																	<option value="400">Valor R$400,00 </option>
																	<option value="500">Valor R$500,00 </option>
																</select>
										<br>
										<br>
										
									
								</div>
								<div>
									</br>
								</div>
								
						
						</div>
						<div class="modal-footer">
						
						<button type="submit" class="btn btn-success">Enviar Orçamento</button>
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							</form>
						</div>
					</div>
				</div>
			</div>

			//MODAL LOGIN
			<div class="modal" id="modalLogin" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h2 class="modal-title">Login</h2>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
						<form method="post" action="enviarlogin.php">
								<div class="form-group">
									<label for="inputName" >E-mail</label>
									</br>
									<input type="text" name="email" class="form-control">
								</div>
								<div>
									<label for="inputName" >Senha</label>
									</br>
									<input type="password" name="senha" class="form-control">
								</div>
							
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-sucess">Login</button>
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							</form>
						</div>
					</div>
				</div>
			</div>

		</div>

		<div class="gototop js-top">
			<a href="#" class="js-gotop">
				<i class="icon-arrow-up"></i>
			</a>
		</div>

		<!-- jQuery -->
		<script src="js/jquery.min.js"></script>
		<!-- jQuery Easing -->
		<script src="js/jquery.easing.1.3.js"></script>
		<!-- Bootstrap -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Waypoints -->
		<script src="js/jquery.waypoints.min.js"></script>
		<!-- Carousel -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- countTo -->
		<script src="js/jquery.countTo.js"></script>
		<!-- Magnific Popup -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/magnific-popup-options.js"></script>
		<!-- Main -->
		<script src="js/main.js"></script>
		<!--Funçoes-->
		<script src="js/jfuncoes.js"></script>
		<script>

			function changeText1() {
				document.getElementById("orcamento").innerHTML = "150";
			}

		</script>
	</body>

</html>