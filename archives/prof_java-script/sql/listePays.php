<?php
$pdo = new PDO(
  'mysql:host=localhost; dbname=2019_11_19_ex19_2019_population; charset=utf8',
  'root',
  ''
);

$statement = $pdo->prepare("SELECT DISTINCT paysP FROM personnes");
$statement->execute();

$results = $statement->fetchAll(PDO::FETCH_ASSOC);
$json = json_encode($results);

echo $json;
