<?php
if(@$titol!=NULL) {
  echo'<ul>';

  $i=0;
  foreach ($_SESSION["Carro_Titol"] as $fila) {

    echo '<li id="listaCarro" style="list-style: none"><p style="grid-area: Titol">' . $fila . '</p> <img class ="imatge_carro" style="grid-area: Imatge" src="' . $_SESSION["Carro_Imatge"][$i] . '"> <p style="grid-area: Preu">' . $_SESSION["Carro_Prreu"][$i] . '€   </p> <p style="grid-area: Cantidad">   Cantidad: ' . $_SESSION["Carro_Qty"][$i] . '</p> <a id="'.$i.'"> <button  type="submit" onclick="Apareixer_Input('.$i.',1)"> Editar Cantidad</button></a></li>';
    $i++;
  }
  echo '</ul>';
}
else{
  echo'<ul>';
  echo '<li style="list-style: none"><p>No teneis nada en el carro</p></li>';
  echo '</ul>';
}
