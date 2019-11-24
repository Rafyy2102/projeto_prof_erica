<?php require 'pages/header.php'; ?>
<div class="container">
	
	<?php
	require 'classes/usuarios.class.php';

	 if(isset($_POST['nome']) && !empty($_POST['nome'])) {
		$nome = addslashes($_POST['nome']);
		$cep = addslashes($_POST['email']);
		$rua = addslashes($_POST['senha']);
		$bairro = addslashes($_POST['bairro']);
		$cidade = addslashes($_POST['cidade']);
		$email = addslashes($_POST['email']);
		$senha = $_POST['senha'];
		$telefone = addslashes($_POST['telefone']);
		$u = new Usuarios();
	    $u->atualizarUsuario($nome, $email, $senha,$cep, $rua, $bairro, $cidade, $telefone, $_POST['id']);
	}
  
		?>
	
	<div class="row">

		<?php 
		$u = new Usuarios();
	
		$resp = $u->getIdUsuario($_GET['id']);

		 ?>
		<h1>Cadastre-se</h1>
	<form method="POST">
		<div class="form-group">
			<input type="hidden" name="id" value="<?php echo $resp['id']?>">
			<input type="text" name="nome" id="nome" class="form-control" value="<?php echo$resp['nome']?>" />
		</div>
		<div class="form-group">
			<input type="email" name="email" id="email" class="form-control" value="<?php echo$resp['email']?>" />
		</div>
		<div class="form-group">
			<input type="password" name="senha" id="senha" class="form-control" value="<?php echo$resp['senha']?>" />
		</div>
		<div class="form-group">
			<input type="text" name="cep" id="cep" class="form-control" value="<?php echo$resp['cep']?>" />
		</div>
		<div class="form-group">
			<input type="text" name="cidade" id="cidade" class="form-control" value="<?php echo$resp['cidade']?>" />
		</div>
		<div class="form-group">
			<input type="text" name="rua" id="rua" class="form-control" value="<?php echo$resp['rua']?>" />
		</div>
		<div class="form-group">
			<input type="text" name="bairro" id="bairro" class="form-control"value="<?php echo$resp['bairro']?>" />
		</div>
		<div class="form-group">
			<input type="text" name="telefone" id="telefone" class="form-control" value="<?php echo$resp['telefone']?>" />
		</div>
		<input type="submit" value="Atualizar" class="btn btn-primary"/>
	</form>
	</div>

</div>

<?php require 'pages/footer.php'; ?>
