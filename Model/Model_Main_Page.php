<?php

function ObtenirCategories($connexio)
{
  try {
    $consulta = $connexio->prepare("SELECT ID,Nom,IMG FROM `categorias`");
    $consulta->execute();
    $categorias = $consulta->fetchAll(PDO::FETCH_ASSOC);
  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
  }

  return $categorias;
}

function ObtenirJocs ($connexio)
{
  try {
    $sql = $connexio->prepare("SELECT * FROM `jocs`");
    $sql->execute();
    $Jocs = $sql->fetchAll(PDO::FETCH_ASSOC);
  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  return $Jocs;
}


