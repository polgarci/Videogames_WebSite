<?php
if(@$cons!=NULL) {
  echo'<ul>';
  $Pedido=0;
  foreach ($cons as $fila){

    If($fila["ID_Factura"]!=$Pedido){
      echo '</ul>';
      echo'<ul style="border-style: solid; border-color:#74BFC3; border-radius: 14px; width:70%">';
      $Pedido=$fila["ID_Factura"];
    }

    echo '<p >'.$fila["fecha"].'</p><li id="listaCarro" style="list-style: none"><p  style="grid-area: Titol">' . $fila["Titol"] . '</p> <img class ="imatge_carro" style="grid-area: Imatge" src="' . $fila["Imatge"] . '"><p style="grid-area: Preu;">' . $fila["Precio"] . '€   </p> <pstyle="grid-area: Cantidad">   Cantidad: ' . $fila["Cantidad"] . '</p></li>';


  }

  echo '</ul>';
}
else{
  echo'<ul>';
  echo '<li style="list-style: none"><p>No teneis nada en la compra</p></li>';
  echo '</ul>';
}
