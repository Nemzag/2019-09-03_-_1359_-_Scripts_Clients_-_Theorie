<?php
  $num= $_GET["numtxt"];
  echo "TEXTE ".$num." : ";
  sleep(5);
  switch ($num){
    case 1: echo 'Et voici le texte numéro 1'; 
            break;
    case 2: echo 'Numéro DEUX';
            break;
    case 3: echo 'Ceci est le troisième texte';
            break;
  }
?>
