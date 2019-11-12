<?php
$cp = $_GET['cp'];

$pdo = new PDO(
  'mysql:host=localhost; dbname=codespostaux; charset=utf8',
  'root',
  ''
);

$stat = $pdo->prepare(
  "SELECT * FROM belgique WHERE CP = :cp ORDER BY CP ASC"
);
$stat->execute([':cp' => $cp]);

$result = $stat->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($result);
