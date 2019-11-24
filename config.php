<?php
global $pdo;
try {
	$pdo = new PDO("mysql:dbname=usuario;host=localhost", "root", "");
} catch(PDOException $e) {
	echo "FALHOU: ".$e->getMessage();
	exit;
}
?>
