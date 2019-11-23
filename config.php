<?php
global $pdo;
try {
	$pdo = new PDO("mysql:dbname=site_vagas;host=localhost", "root", "");
} catch(PDOException $e) {
	echo "FALHOU: ".$e->getMessage();
	exit;
}
?>