<?php


function ComprobarUsuari($connexioo,$usuari)
{

  $Validacio = $connexioo->prepare("SELECT Usuario FROM registres WHERE Usuario='$usuari'");
  $Validacio->execute();
  $result = $Validacio->fetchAll(PDO::FETCH_ASSOC);
  return $result;
}
