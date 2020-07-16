<?php

function RecuperarCategories($connexioo,$Nom)
{
  $sql = 'SELECT * FROM jocs WHERE id_categoria1 =(SELECT id FROM categorias WHERE NOM="' .$Nom . '") OR id_categoria2= (SELECT id FROM categorias WHERE NOM="' . $Nom. '")';
  $consulta_jocs = $connexioo->prepare($sql);
  $consulta_jocs->execute();
  $resultat_jocs = $consulta_jocs->fetchAll(PDO::FETCH_ASSOC);
  return $resultat_jocs;
}

