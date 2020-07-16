<?php
function ObtenirQty($connexio,$titol)
{
  $resul = $connexio->prepare("SELECT Cantitat FROM jocs WHERE Titol='$titol'");
  $resul->execute();
  $res = $resul->fetchAll(PDO::FETCH_ASSOC);
  return $res;
}

function ModifQty ($connexio,$titol,$CantRes){


  $resul=$connexio->prepare("UPDATE jocs SET Cantitat='$CantRes' WHERE Titol='$titol'");
  $resul->execute();

}
