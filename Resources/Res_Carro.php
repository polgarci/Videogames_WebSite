<!DOCTYPE html>
<html lang="es">


<head>

  <meta charset="utf-8"/>
  <meta name="viewport" content="initial-scale=1.0, width=device-width, user-scalable=yes"/>
  <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
  <link rel="stylesheet" type="text/css" href="/css/UserSettings.css">
  <link rel="stylesheet" type="text/css" href="/css/CarroPage.css">
  <link rel="stylesheet" type="text/css" href="/css/index.css">
  <link rel="stylesheet" type="text/css" href="/css/Producte.css">
  <title>This is #PMG</title>
  <link rel="icon"
        type="image/png"
        href="favicon.ico">
<script src="/js/AñadirCarro.js"></script>


</head>


<body>

 <?php include_once __DIR__."/Res_VistaWebCarrito.php"?>
<div id="wrap">

  <STYLE>A {text-decoration: none;} </STYLE> <!-- Sin esto los links se subrayan y queda bastante feo -->

<?php include_once __DIR__."/Res_Cabezera.php"?>

<!--main content-->



<div class="container">
 <section style="grid-area:Compra">
   <h3 class="txt-menu">Lista de Compra</h3>
   <div id="CarroArticles">
   <?php  include_once __DIR__."/../Controlador/Controlador_ObtenirArticlesCarro.php"?>
   </div>

   <button class="BotonesCarro" onclick="BuidarCarro()">Buidar Carro</button>
   <button class="BotonesCarro2" onclick="CargarCompra()"> Añadir a Pedidos</button>
 </section>
<section style="grid-area:Pedidos">
  <h3>Lista de Pedidos</h3>
  <div id="CarroArticles">
    <?php  include_once __DIR__."/../Controlador/Controlador_PreConfirmacio_Compra.php"?>
  </div>

</section>

</div>

 <?php include_once __DIR__."/Res_Footer.php";?>

</div> <!--div del wrap que hace que al hacer zoom out se mantenga centrado-->
</body>



</html>
