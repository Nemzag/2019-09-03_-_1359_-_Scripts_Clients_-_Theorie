<?php

$file = $_GET["csv_file"];

// chaine de caractères avec toutes les données
$csv = file_get_contents($file);

// toutes les lignes à traiter
$data = array_map("str_getcsv", explode("\n", $csv));

// nbre de lignes
$nbLg = count($data);

// 1ère ligne reprend les noms des champs
$champs = $data[0];

// résultats en json
$json = [];


for ($li = 1; $li < $nbLg; $li++) {

	// chaque ligne est un tableau
	$json[$li - 1] = [];

    foreach ($champs as $id => $col) {
        $json[$li - 1][$col] = $data[$li][$id];
    }
}

echo json_encode($json);
