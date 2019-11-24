<?php require 'config.php'; ?>
<html>
<head>
	<title>Site de Vagas</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/style.css" />
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>
	<style>
		.row{
		    margin: auto;
			align-items: center;
			width: 25%px;
		}
		.jumbotron form{
			width: 50%;
			margin: auto;
	
		}
	</style>
</head>
<body>
	<div class="container">
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="./" class="navbar-brand">Home</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<?php if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])): ?>
					<li><a href="cadastrar.php">Cadastrar</a></li>
					<li><a href="sair.php"></a></li>
				<?php else: ?>
					<li><a href="cadastrar.php"></a></li>
					<li><a href="login.php"></a></li>
				<?php endif; ?>
			</ul>
		</div>
	</nav>
	</div>
