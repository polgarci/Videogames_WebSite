<!DOCTYPE html>
<html lang="es">


<head>

  <meta charset="utf-8"/>
  <meta name="viewport" content="initial-scale=1.0, width=device-width, user-scalable=yes"/>
  <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
  <link rel="stylesheet" type="text/css" href="index.css">
  <title>This is #PMG</title>
  <link rel="icon"
        type="image/png"
        href="favicon.ico">
  <script src="js/vendor/jquery-3.4.1.min.js" type="text/javascript" ></script>
  <script src="Slider.js" type="text/javascript"></script>

  <script src="js/AJAX_Producte.js"></script>
  <script src="js/AJAX_categoria.js"></script>
  <script src="/js/rellotge.js"> </script>
  <script src="/js/event.js"> </script>
  <script src="/js/login.js"> </script>
  <script src="/js/MenuDesplegable.js"> </script>

</head>
<body>
<STYLE> a {color:inherit; }</STYLE>
  <b id="Registro"><?php echo $_SESSION["Username"]?></b>

<form id="Logisn">
<button  type="submit" class="Login"><img   src="/images/User.png" width="40" height="40"> </button>
<div class="UserDropDown">
  <ul id="listaUser" style="text-decoration: none">
    <li class="ObjectUser" style="text-decoration: none"><a href="/index.php?accio=perfil" >PERFIL</a></li>
    <li class="ObjectUser" style="text-decoration: none"><a href="/index.php?accio=carro" style="text-decoration: none">CESTA</a></li>
    <li class="ObjectUser" style="text-decoration: none"><a href="/index.php?accio=cerrar" style="text-decoration: none">CERRAR SESSION</a></li>

  </ul>
</form>



  <div >

  </div>




</body>



</html>

