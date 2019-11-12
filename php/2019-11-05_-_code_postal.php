<?php
/*
 * Created by PhpStorm.
 * User: Nemzag aka Gaz‑mên Arifi (Shkypi, 1979-09-30).
 * Date: 05/11/2019
 * Time: 10:59
 * Updated:
*/

$filtre = $_GET['filtreCodesPostaux'];

$pdo = new PDO('mysql:host=localhost; dbname=2019_codes_postaux; charset=utf8',
	'root', '');

$statement = $pdo->prepare("
        SELECT cp, commune
          FROM belgique
         WHERE cp
          LIKE :filtre
      ORDER BY commune ASC;
      ");

$statement->execute([':filtre'=>$filtre.'%'/* chaîne + % = tout. */]);
$results = $statement->fetchAll(PDO::FETCH_ASSOC);
$json = json_encode($results);
echo $json;

