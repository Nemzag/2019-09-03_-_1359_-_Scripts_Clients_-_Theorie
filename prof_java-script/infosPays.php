<?php
  $idP= $_GET['idPays'];
  $pdo=new PDO('mysql:host=localhost; dbname=paysmonde; charset=utf8',
               'root', '');

  $statement=$pdo->prepare("SELECT * FROM pays WHERE idP = :idP");
  $statement->execute([':idP'=>$idP]);
  $results=$statement->fetchAll(PDO::FETCH_ASSOC);
  $json=json_encode($results);

  echo $json;
?>
