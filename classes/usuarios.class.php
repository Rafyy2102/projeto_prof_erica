<?php
class Usuarios {

	public function getUsuarios(){
		global $pdo;

		$sql = $pdo->query("SELECT * FROM usuarios");
		$row = $sql->fetchAll();

		return $row;
	}

	public function apagar($id){
		global $pdo;
		$sql = $pdo->prepare("DELETE FROM usuarios WHERE id = :id");
		$sql->bindValue(":id", $id);
		$sql->execute();

		return true;

	}

	public function cadastrar($nome, $email, $senha,$cep, $rua, $bairro, $cidade , $telefone) {
		global $pdo;
		$sql = $pdo->prepare("SELECT id FROM usuarios WHERE email = :email");
		$sql->bindValue(":email", $email);
		$sql->execute();

		if($sql->rowCount() == 0) {

			$sql = $pdo->prepare("INSERT INTO usuarios SET nome = :nome, email = :email, senha = :senha,  cep = :cep, rua = :rua, bairro = :bairro, cidade = :cidade,telefone = :telefone");
			$sql->bindValue(":nome", $nome);
			$sql->bindValue(":email", $email);
			$sql->bindValue(":senha", $senha);
			$sql->bindValue(":cep", $cep);
			$sql->bindValue(":rua", $rua);
			$sql->bindValue(":bairro", $bairro);
			$sql->bindValue(":cidade", $cidade);
			$sql->bindValue(":telefone", $telefone);
			
			$sql->execute();

			return true;

		} else {
			return false;
		}

	}

	public function login($email, $senha) {
		global $pdo;

		$sql = $pdo->prepare("SELECT id FROM usuarios WHERE email = :email AND senha = :senha");
		$sql->bindValue(":email", $email);
		$sql->bindValue(":senha", $senha);
		$sql->execute();

		if($sql->rowCount() > 0) {
			$dado = $sql->fetch();
			$_SESSION['cLogin'] = $dado['id'];
			return true;
		} else {
			return false;
		}

	}


	public function getIdUsuario($id){


		global $pdo;

		$sql = $pdo->prepare("SELECT * from usuarios where id = :id ");
		$sql->bindValue(":id", $id);
		$sql->execute();
		$row = $sql->fetch();

		return $row;

	}

	public function atualizarUsuario($nome, $email, $senha,$cep, $rua, $bairro, $cidade, $telefone, $id) {
		global $pdo;

			$sql = $pdo->prepare("UPDATE usuarios SET nome = :nome, email = :email, senha = :senha,  cep = :cep, rua = :rua, bairro = :bairro, cidade = :cidade, telefone = :telefone where id = :id");
			$sql->bindValue(":nome", $nome);
			$sql->bindValue(":email", $email);
			$sql->bindValue(":senha", $senha);
			$sql->bindValue(":cep", $cep);
			$sql->bindValue(":rua", $rua);
			$sql->bindValue(":bairro", $bairro);
			$sql->bindValue(":cidade", $cidade);
			$sql->bindValue(":telefone", $telefone);
			$sql->bindValue(":id", $id);
			$sql->execute();

			return true;

		

	}



}
?>