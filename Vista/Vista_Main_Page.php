<!DOCTYPE html>
<html lang="es">


<head>

  <meta charset="utf-8"/>
  <meta name="viewport" content="initial-scale=1.0, width=device-width, user-scalable=yes"/>
  <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
  <link rel="stylesheet" type="text/css" href="/css/UserSettings.css">
  <link rel="stylesheet" type="text/css" href="/css/index.css">

  <link rel="stylesheet" type="text/css" href="/css/Producte.css">
  <title>This is #PMG</title>
  <link rel="icon"
        type="image/png"
        href="favicon.ico">
  <script src="/js/vendor/jquery-3.4.1.min.js" type="text/javascript" ></script>
  <script src="/js/Slider.js" type="text/javascript"></script>

  <script src="/js/AJAX_ProductesEspecials.js"></script>
  <script src="/js/AJAX_categoria.js"></script>
  <script src="/js/rellotge.js"> </script>
  <script src="/js/event.js"> </script>
  <script src="/js/login.js"> </script>
  <script src="/js/AñadirCarro.js"> </script>


</head>


<body>



<div id="wrap">

  <STYLE>A {text-decoration: none;} </STYLE> <!-- Sin esto los links se subrayan y queda bastante feo -->

  <header>


    <div id="barra">
      <form action="/index.php" method="GET" id="busqueda" >

        <input type="hidden" name="accio" value="search"/>
        <input class="barra"  type="search" name="k" placeholder="¿Tenemos lo que buscas?"  />



      </form>


    </div>



    <?php

    if(@$_SESSION["Username"]!=NULL)
    {
      include_once __DIR__."/../Resources/Res_SessioUsuari.php";}
    else{

      include_once __DIR__."/../Resources/Resource_LoginRegisterButtons.php";
    }?>

</div>

<?php
if(@$_SESSION["Username"]!=NULL)
{
  echo '<a id="carro"href="/index.php?accio=carro"> <img  src="/images/CarroBlanco.png"   width="120" height="90"></a>';
}
else{
  echo '<a id="carro" onclick="AlertaNoUsuari()"> <img  src="/images/CarroBlanco.png"   width="120" height="90"></a>';

}?>





<h1> <a href="/index.php"><img src="/images/PMG.png"></a> </h1>


</header>

<!--main content-->


<div id="main">

  <?php  include_once __DIR__."/../Resources/Res_VistaWebCarrito.php" ?>


  <nav class="menu" class="center">


    <ul>

      <?php foreach($categorias as $categoria){ ?>
        <li class="txt-menu">
          <?php echo '<img  width="65" height="51.9" src="' . $categoria['IMG'] . '" />' ?>
          <form id="<?php echo $categoria["Nom"];?>" >

            <div style="all:unset;"  onclick="SelectCategory('<?php echo $categoria["Nom"] ?>')" class="nomCategoria" ><?php echo $categoria["Nom"]; ?></div>
          </form>
        </li>
      <?php } ?>
      <div id="adLeft"><img src="/images/Cyberpunk.png" ></div>
    </ul>



  </nav>


  <div class="relative"><img id="adRight" src="../images/BannerWDL2.png"></div>



  <?php

  if ((isset($_GET['k']) && $_GET['k'] == "") OR (!isset($_GET['k'])))
  {
    include_once __DIR__ . "/Vista_Contenidor.php";
  }
  else{

    include_once __DIR__ .'/../Vista/Vista_cerca.php';

  }
  ;?>

</div>



<?php include_once __DIR__ .'/../Resources/Res_Footer.php'?>

</div> <!--div del wrap que hace que al hacer zoom out se mantenga centrado-->
</body>



</html>
