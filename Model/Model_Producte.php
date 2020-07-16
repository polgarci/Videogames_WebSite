<?php

function  ObtenirJocsDeCategoria($connexio, $producte)
{
  $consulta_producte = $connexio->prepare('SELECT * FROM jocs WHERE id="' . $producte . '"');
  $consulta_producte->execute();
  $resultat_producte = $consulta_producte->fetchAll(PDO::FETCH_ASSOC);
  return $resultat_producte;
}
