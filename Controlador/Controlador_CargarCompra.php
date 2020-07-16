<?php

include_once __DIR__."/../Model/connectBD.php";
include_once __DIR__ . "/../Model/Model_Inserir_Factures_i_Compres.php";
if($_SESSION["Carro_Titol"]!=NULL){
try {

  $ID_Factura = rand(0, 2147483640);


} catch (Exception $e) {
}

$Qty_total=0;

$Precio_total=0;
$i=0;
foreach ($_SESSION["Carro_Qty"] as $fila){$Qty_total=$Qty_total+$fila; $Precio_total=$Precio_total+$_SESSION["Carro_Prreu"][$i];}
$Fecha=date(DATE_ATOM);

$connecta = connectaBD();
Inserir_Factures($connecta,$_SESSION["Username"],$ID_Factura,$Qty_total,$Precio_total,$Fecha);
$i=0;
foreach ($_SESSION["Carro_Titol"] as $fila){
$ID_Compra = rand(0, 2147483647);
$connecta=connectaBD();
Inserir_Compres($connecta,$i,$ID_Factura,$ID_Compra);
$i++;
$missatge ="FELICIDADES, la compra se ha tramitado perfectamente";
}

}

