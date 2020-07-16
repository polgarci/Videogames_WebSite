<!DOCTYPE html>
<html lang="es">


<head>

  <meta charset="utf-8"/>
  <meta name="viewport" content="initial-scale=1.0, width=device-width, user-scalable=yes"/>
  <title>This is #PMG</title>
  <link rel="icon"
        type="image/png"
        href="/favicon.ico">




</head>
<body>

<div id="BarraCarro">

  <?php
  $mida=@count(@$_SESSION["Carro_Prreu"]);

  if($mida==0)
  {
    echo '<p style="grid-area:txt-barra-left">Numero de Productos : 0</p>';
    echo '<p style="grid-area:txt-barra-center">Precio Total : 0€</p>';
  echo '<p style="grid-area:txt-barra-right"> Ultimo producto comprado: </p>';
  }
  else{
    $PreuTotal=0;
    foreach ($_SESSION["Carro_Prreu"] as $fila){
      $PreuTotal=$PreuTotal+$fila;

    }

    echo '<p style="grid-area:txt-barra-left">Numero de Productos: '.$mida.'</p>';
    echo '<p style="grid-area:txt-barra-center">Precio Total: '.$PreuTotal.' €</p>';
    echo '<p style="grid-area:txt-barra-right"> Ultimo producto comprado: '.$_SESSION["Carro_Titol"][$mida-1].' </p>';

  }
  ?>
</div>


</body>



</html>
