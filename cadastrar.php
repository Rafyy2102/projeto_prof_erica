<?php require 'pages/header.php'; ?>

<div class="container">
	
    <?php
    //verificar com o Cleristom pq armazena algumas informações na variavel u$
	require 'classes/usuarios.class.php';
	$u = new Usuarios();

	if(isset($_POST['nome']) && !empty($_POST['nome'])) {		
        $email = addslashes($_POST['email']);
        $nome = addslashes($_POST['nome']);
        $cpf = addslashes($_POST['cpf']);
        $telefone = addslashes($_POST['telefone']);
        $cep = addslashes($_POST['cep']);
        $rua = addslashes($_POST['rua']);
        $bairro = addslashes($_POST['bairro']);
        $cidade = addslashes($_POST['cidade']);
        $estado = addslashes($_POST['estado']);     
	$senha = $_POST['senha'];  
	
		if(!empty($nome) && !empty($email) && !empty($senha)) {
			if($u->cadastrar($email,$nome,$cpf,$telefone,$cep,$rua,$bairro,$cidade,$estado,$senha)) {
				?>
				<div class="alert alert-success">
					<strong>Parabéns!</strong> Cadastrado com sucesso. <a href="login.php" class="alert-link">Faça o login agora</a>
				</div>
                <?php
