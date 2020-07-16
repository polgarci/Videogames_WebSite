<?php
//Aqui eliminem el contingut de la sessio afegin un NULL
include_once __DIR__."/../Model/connectBD.php";
include_once __DIR__."/../Model/Model_ModificaQty.php";


$connexio=connectaBD();
$i=0;

foreach ($_SESSION["Carro_Titol"] as $fila){
  $res=ObtenirQty($connexio,$fila);
  foreach ($res as $columna)
  {
    $Qty=$_SESSION["Carro_Qty"][$i]+$columna["Cantitat"];
    ModifQty($connexio,$fila,$Qty);
  }

  $i++;
}

$_SESSION["Carro_Titol"]=NULL;
  $_SESSION["Carro_Prreu"]=NULL;
  $_SESSION["Carro_Imatge"]=NULL;
  $_SESSION["Carro_id"]=NULL;
  $_SESSION["Carro_Qty"]=NULL;






