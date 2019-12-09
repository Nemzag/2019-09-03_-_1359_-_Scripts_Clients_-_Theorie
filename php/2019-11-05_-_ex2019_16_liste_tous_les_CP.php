<?php

$pdo = new PDO(
  'mysql:host=localhost; dbname=2019_codes_postaux; charset=utf8',
  'root',
  ''
);

$stat = $pdo->prepare(
    "SELECT DISTINCT CP
       FROM belgique
   ORDER BY CP ASC"
);

$stat->execute();

$result = $stat->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);
