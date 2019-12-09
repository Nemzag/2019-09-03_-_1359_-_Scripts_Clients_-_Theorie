<?php
$cp = $_GET['cp'];

$pdo = new PDO(
  'mysql:host=localhost; dbname=2019_codes_postaux; charset=utf8',
  'root',
  ''
);

$stat = $pdo->prepare(
    "SELECT *
	   FROM belgique
	  WHERE CP = :cp
   ORDER BY CP ASC"
);

$stat->execute([':cp' => $cp]);
// au peu mettre aussi un bindParam().

$result = $stat->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);
