<?php require 'pages/header.php'; ?>
<div class="container">
	
	<?php
	require 'classes/usuarios.class.php';
	$u = new Usuarios();

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
			if($u->cadastrar($nome, $email, $senha,$cep,$rua,$bairro,$cidade , $telefone)) {
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