<link rel="stylesheet" type="text/css" href="/css/UserSettings.css">
<link rel="stylesheet" type="text/css" href="/index.css">

<link rel="stylesheet" type="text/css" href="/Producte.css">


<?php

$connexio=connectaBD();

$consulta_producte= $connexio->prepare('SELECT * FROM jocs WHERE id="'.$_GET["producte"].'"');
$consulta_producte->execute();
$resultat_producte=$consulta_producte->fetchAll(PDO::FETCH_ASSOC);
foreach ($resultat_producte as $fila){

echo'<div id="grid-joc">';

echo '<section id="box_titol" style="grid-area: box_titol"><b>'.$fila["Titol"].'</b></section>';
echo '<section id="box_imatge"  style="grid-area: box_imatge"> <img src="'. $fila["Imatge"].'" width="250px" height="350px" ></section>';

echo '<section id="box_descripcio"  style="grid-area: box_descripcio">'.$fila["Descripcio"].'</section>';
echo '<section id="box_preu"  style="grid-area: box_preu">'.$fila["Preu"].'</section>';
echo'</div>';

$connexio=null;
}

?>
