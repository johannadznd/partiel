<?php
function getPdo(): PDO
{
  try {
    $pdo = new PDO(
      "mysql:host=localhost;dbname=partiel",
      "partiel",
      "19vVSLzoqsRVJns6"
    );
    return $pdo;
  } catch(PDOException $ex) {
    exit("Erreur lors de la connexion à la base de données");
  }
}