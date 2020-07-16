<head>

  <meta charset="utf-8"/>
  <meta name="viewport" content="initial-scale=1.0, width=device-width, user-scalable=yes"/>
  <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
  <link rel="stylesheet" type="text/css" href="/css/UserSettings.css">
  <link rel="stylesheet" type="text/css" href="/index.css">
  <link rel="stylesheet" type="text/css" href="../css/Producte.css">

</head>



<?php



foreach ($resultat_producte as $fila){
if($Bool){ $fila["Preu"]=number_format ( $fila["Preu"]*0.7 , 2);}
echo'<param id="ParamID" name="ParamID" value="'.$fila["id"].'"> </param>';

echo'<div id="grid-joc">';

echo '<param id="ParamTitol" name="TitolProducte" value="'.$fila["Titol"].'"><section id="box_titol" style="grid-area: box_titol"><b >'.$fila["Titol"].'</b></section></param>';
echo '<param id="ParamImatge" name="ImatgeProducte" value="'.$fila["Imatge"].'"> <section id="box_imatge"  style="grid-area: box_imatge"> <img  value src="'. $fila["Imatge"].'" width="250px" height="350px" ></section></param>';

////////////////////////OJO PQ TOT ES DIU MINI
echo '<param id="ParamMini" name="MiniProducte" value="'.$fila["Mini"].'"><section id="box_descripcio"  style="grid-area: box_descripcio">'.$fila["Descripcio"].'</section></param>';
if(@$_SESSION["Username"] !=NULL) {
  echo '<param id="ParamPreu" name="PreuProducte" value="' . $fila["Preu"] . '"><section id="box_preu"  style="grid-area: box_preu"><i><b>' . $fila["Preu"] . '€ </b></i><div class="botonesCantidad"><button class="Boton-" style="grid-area:Boton-" onclick="RestarCantidad()">-</button><param style="grid-area: Num" id="NumCantidad" name="NumeroCantitat" value="1""><a id="ValorCantidad">1</a></param><button class="BotonMas" style="grid-area: BotonMas" onclick="SumarCantidad()">+</button><button style="grid-area:Carrito " class="AñadirCarro"  onclick="ComprarProducte()">Añadir al carro</button> </div></section></param>';
}
else {
  echo '<section id="box_preu"  style="grid-area: box_preu"><i><b>' . $fila["Preu"] . '€ </b></i><button class="AñadirCarro" onclick="AlertaNoUsuari()">¿Cómo puedo comprar este juego?</button></section>';
}
echo'</div>';

$connexio=null;
}

?>
