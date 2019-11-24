<?php require 'config.php'; ?>

<!DOCTYPE HTML>
<html lang="pt-br">
<meta charset="UTF-8">
<html>
<head>
	<title>Creative S.A.</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<link href="./styles.css" rel="stylesheet">   
	<style>
	
		#form{
			width: 50%;
		}

		.alert-danger{
			background-color: red;
		}

		.wrapper.style4 form input[type=text],form input[type=email], .wrapper.style4 form input[type=password], .wrapper.style4 form select, .wrapper.style4 form textarea {
    border: none;
    background: #fff;
    margin-bottom: 20px;
		}
	
	</style>
</head>
<body class="is-preload">

	<!-- Nav -->
	<nav id="nav">
		<ul class="container">
			<li><a href="#top">Creative S.A.</a></li>
			<li><a href="#work">Login</a></li>
			<li><a href="#portfolio">Trabalhos Realizados</a></li>
			<li><a href="#contact">Cadastre-se</a></li>
		</ul>
	</nav>

	<!-- Home -->
	<article id="top" class="wrapper style1">
		<div class="container">
			<div class="row">
				<div class="col-4 col-5-large col-12-medium">
					<span class="image fit"><img src="images/creative.jpg" alt="" /></span>
				</div>
				<div class="col-8 col-7-large col-12-medium">
					<header>
						<h1>Oi!! Somos a <strong>Creative S.A.</strong></h1>
					</header>
					<p>Criamos <strong>sites incríveis</strong>, você escolhe como quer e nós realizamos para você, conte conosco!</p>
					<a href="#work" class="button large scrolly">Faça o login</a>
				</div>
			</div> 
		</div>
	</article>
	<!-- Work -->
	<article id="work" class="wrapper style2">
		<div class="container">
			<header>
				<h2>Login do Usuário</h2>
			</header>
			
	<?php 

	require 'classes/usuarios.class.php';
	$u = new Usuarios();
	if(isset($_POST['email']) && !empty($_POST['email'])) {
		$email = addslashes($_POST['email']);
		$senha = $_POST['senha'];

		if($u->login($email, $senha)) {
			?>
			<script type="text/javascript">window.location.href="./logado.php";</script>
			<?php
		} else {
			?>
			<div class="alert alert-danger">
				Usuário e/ou Senha errados!
			</div>
			<?php
		}
	}
	?>
					<center>		
						<div class="card-form">
				<form id="form" method="POST" action="#">
					<div class="card-form-group">
						<label>E-mail</label>
						<input id="email" name="email" type="email"/>
					</div>
					<div class="card-form-group">
						<label>Senha</label>
						<input id="senha" name="senha" type="password"/>
					</div>
					<button type="submit">Enviar</button>
				</form>
			</div>
			</center>
	
		</div>
	</article>

	<!-- Portfolio -->
	<article id="portfolio" class="wrapper style3">
		<div class="container">
			<header>
				<h2>Opções padronizadas Creative</h2>
			</header>
			<div class="row">
				<div class="col-4 col-6-medium col-12-small">
					<article class="box style2">
						<a href="#" class="image featured"><img src="images/pic05.jpg" alt="" /></a>
						<h3><a href="https://youtu.be/OrDcVj1hTGc" target="_blank">E-commerce</a></h3>

					</article>
				</div>
				<div class="col-4 col-6-medium col-12-small">
					<article class="box style2">
						<a href="#" class="image featured"><img src="images/pic06.jpg" alt="" /></a>
						<h3><a href="https://youtu.be/rTDDyB1cA1g " target="_blank">Sites responsivos</a></h3>

					</article>
				</div>
				<div class="col-4 col-6-medium col-12-small">
					<article class="box style2">
						<a href="#" class="image featured"><img src="images/pic00.jpg" alt="" /></a>
						<h3><a href="https://www.google.com/" target="_blank">Seja encontrado na WEB</a></h3>

					</article>
				</div>			

			</div>
			<footer>

				<a href="#contact" class="button large scrolly">Gostou? Então cadastre-se agora!</a>
			</footer>
		</div>
	</article>

	<!--envio de e-mail-->
	<article id="contact" class="wrapper style4">

	<?php

	$user = new Usuarios();
	
	if(isset($_POST['nome']) && !empty($_POST['nome'])) {
		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);
		$senha = $_POST['senha'];
		$cep = addslashes($_POST['cep']);
		$rua = addslashes($_POST['rua']);
		$bairro = addslashes($_POST['bairro']);
		$cidade = addslashes($_POST['cidade']);
		$telefone = addslashes($_POST['telefone']);

		if(!empty($nome) && !empty($email) && !empty($senha)) {
			if($user->cadastrar($nome, $email, $senha,$cep,$rua,$bairro,$cidade , $telefone)) {
				?>
				<div class="alert alert-success">
					<strong>Parabéns!</strong> Cadastrado com sucesso. <a href="login.php" class="alert-link">Faça o login agora</a>
				</div>
				<?php
			} else {
				?>
				<div class="alert alert-warning">
					Este usuário já existe! <a href="login.php" class="alert-link">Faça o login agora</a>
				</div>
				<?php
			}
		} else {
			?>
			<div class="alert alert-warning">
				Preencha todos os campos!
			</div>
			<?php
		}

	}
	?>
		<div class="container medium">
			<header>
				<h2>Estamos felizes em ter você como nosso novo cliente.</h2>
				<p>Seu desejo é uma ordem! Deixe-nos fazer acontecer para você.</p>
			</header>
			<main> 
				<div class="">
					<form method="POST">
						<div class="form-group">
							<input type="text" name="nome" id="nome" class="card-form-group" placeholder="Nome" />
						</div>
						<div class="form-group">
							<input type="email" name="email" id="email" class="card-form-group" placeholder="Email" />
						</div>
						<div class="form-group">
							<input type="password" name="senha" id="senha" class="card-form-group" placeholder="Senha" />
						</div>
						<div class="form-group">
							<input type="text" name="cep" id="cep" class="card-form-group" placeholder="Cep" />
						</div>
						<div class="form-group">
							<input type="text" name="cidade" id="cidade" class="card-form-group" placeholder="Cidade" />
						</div>
						<div class="form-group">
							<input type="text" name="rua" id="rua" class="card-form-group" placeholder="Rua" />
						</div>
						<div class="form-group">
							<input type="text" name="bairro" id="bairro" class="card-form-group" placeholder="Bairro" />
						</div>
						<div class="form-group">
							<input type="text" name="telefone" id="telefone" class="card-form-group" placeholder="Telefone" />
						</div>
						<input type="submit" value="Cadastrar" class="btn btn-primary"/><!--<span class=" fa fa-check"></span></input>-->
					</form>
				</div>
			</main>
			<hr />
			<h3>Visite</h3>
			<ul class="social">
				<li><a href="https://twitter.com/login?lang=pt" target="_blank" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="https://www.facebook.com/" target="_blank" class="icon fa-facebook"><span class="label">Facebook</span></a></li>

			</ul>
			<hr />
		</div>
	<div>
	<footer>
		<ul id="copyright">
			<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net"></a></li>
		</ul>
	</footer>
</div>
</article>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

<script >
	jQuery(function($){
		$("#cep").change(function(){
			var cep_code = $(this).val();
			if( cep_code.length <= 0 ) return;
			$.get("http://apps.widenet.com.br/busca-cep/api/cep.json", { code: cep_code },
				function(result){
					if( result.status!=1 ){
						alert(result.message || "Houve um erro desconhecido");
						return;
					}
					$("#cep").val( result.code );
					$("#cidade").val( result.city );
					$("#bairro").val( result.district );
					$("#rua").val( result.address );
					$("#estado").val( result.state );					   
				});
		});
	});

</script>

</body>
</html>
