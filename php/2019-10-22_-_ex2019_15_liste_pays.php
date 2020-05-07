<?php
$filtre = $_GET['filtrePays'];
$pdo = new PDO('mysql:host=localhost; dbname=2019_pays_monde; charset=utf8',
	'root', '');

$statement = $pdo->prepare(
	"(SELECT idP, nomFrP FROM pays WHERE nomFrP LIKE :filtre1 ORDER BY nomFrP ASC)"
	. " UNION "
	. "(SELECT idP, nomFrP FROM pays WHERE nomFrP LIKE :filtre2 ORDER BY nomFrP ASC)"
);

$statement->execute([':filtre1' => $filtre . '%',
	':filtre2' => '%' . $filtre . '%']);

$results = $statement->fetchAll(PDO::FETCH_ASSOC);

$json = json_encode($results);

echo $json;
?>


