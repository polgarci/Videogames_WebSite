<?php
function Inserir_Factures($connecta,$Usuario,$ID_Factura,$Qty_total,$Precio_total,$Fecha)
{
  $resultat = $connecta->prepare("INSERT INTO Facturas(ID_Factura,Usuario,Cantidad,Precio,Fecha)values('$ID_Factura','$Usuario','$Qty_total',$Precio_total,'$Fecha')");
  $resultat->execute();
}
function Inserir_Compres($connecta,$i,$ID_Factura,$ID_Compra){

  $Preu=$_SESSION["Carro_Prreu"][$i] /$_SESSION["Carro_Qty"][$i];
  $Cantidad=$_SESSION["Carro_Qty"][$i];
  $id=$_SESSION["Carro_id"][$i];
  $resultat=$connecta->prepare("INSERT INTO Lineas_Compra(ID_Compra,ID_Factura,id,Cantidad,Precio)values('$ID_Compra','$ID_Factura','$id','$Cantidad','$Preu')");
  $resultat->execute();
}
