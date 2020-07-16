<!DOCTYPE html>
<html lang="es">


<head>


  <meta charset="utf-8"/>
  <meta name="viewport" content="initial-scale=1.0, width=device-width, user-scalable=yes"/>
  <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
  <link rel="stylesheet" type="text/css" href="../css/LoginPage.css">
  <link rel="stylesheet" type="text/css" href="../css/index.css">
  <title>This is #PMG</title>
  <link rel="icon"
        type="image/png"
        href="../favicon.ico">
  <?php  include_once __DIR__."/../Model/Model_CambiParametre.php"?>
  <script src="/js/EfectePerfil.js"></script>
</head>


<body>


<header>


  <h1> <a href="http://tdiw-j3.deic-docencia.uab.cat/index.php"><img src="../images/PMG.png"></a> </h1>

</header>

<STYLE>A {text-decoration: none;} </STYLE> <!-- Sin esto los links se subrayan y queda bastante feo -->

<?php

include_once __DIR__."/../Resources/Res_VistaWebCarrito.php";
?>
<div class="overlay">

  <?php

  include_once __DIR__."/../Controlador/Control_BuscarUsuari.php";
  ?>
</div>

<?php include_once __DIR__."/Res_Footer.php"?>


</body>
</html>
