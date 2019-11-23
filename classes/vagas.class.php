<?php
class Vagas {

	public function getTotaVagas() {
		global $pdo;

		$sql = $pdo->query("SELECT * from vagas");
		$row = $sql->fetchAll();

		return $row;


	}

	public function addVaga($titulo, $descricao) {
		global $pdo;

		$sql = $pdo->prepare("INSERT INTO vagas SET titulo = :titulo, descricao = :descricao");
		$sql->bindValue(":titulo", $titulo);
		$sql->bindValue(":descricao", $descricao);
		$sql->execute();
	}

	

	
	public function excluirVaga($id) {
		global $pdo;

		$sql = $pdo->prepare("DELETE FROM  WHERE id_vaga = :id");
		$sql->bindValue(":id_anuncio", $id);
		$sql->execute();

		$sql = $pdo->prepare("DELETE FROM anuncios WHERE id = :id");
		$sql->bindValue(":id", $id);
		$sql->execute();
	}



}