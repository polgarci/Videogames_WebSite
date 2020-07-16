<?php
include_once __DIR__."/../Model/Model_Inserir_Carro.php";
include_once __DIR__."/../Model/connectBD.php";
include_Once __DIR__."/../Model/Model_ModificaQty.php";

$connexio=connectaBD();

$res=ObtenirQty($connexio,$_GET["Carro_Titol"]);
 $bool=FALSE;
  foreach ($res as $fila){

    if($fila["Cantitat"]>$_GET["Carro_Qty"])
    {
      $bool=TRUE;
      $CantRes=$fila["Cantitat"]-$_GET["Carro_Qty"];
      ModifQty($connexio,$_GET["Carro_Titol"],$CantRes);
    }

  };

  if($bool) {
    Inserir_Carro($_GET["Carro_Titol"], $_GET["Carro_Prreu"] * $_GET["Carro_Qty"], $_GET["Carro_Qty"], $_GET["Carro_id"], $_GET["Carro_Imatge"]);


    $mida = @count(@$_SESSION["Carro_Prreu"]);
    $PreTotal = 0;
    foreach ($_SESSION["Carro_Prreu"] as $fila) {
      $PreTotal = $PreTotal + $fila;

    }
    include_once __DIR__ . "/../Vista/Vista_BarraCarrito.php";
  }
  else{ $missatge="No tenim existencies d'aquest producte, disculpi les molesties"; include_once __DIR__."/../Resources/Res_PagConfrimacio.php";}
?>

