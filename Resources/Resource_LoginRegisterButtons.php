<!DOCTYPE html>
<html lang="es">


<head>

  <meta charset="utf-8"/>
  <meta name="viewport" content="initial-scale=1.0, width=device-width, user-scalable=yes"/>
  <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="stylesheet" type="text/css" href="Producte.css">
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

</head>
<body>


<form method="get" action="/index.php">
  <button type="submit" name ="accio" value="registro" id="Registro"><b>Registro</b></button>
</form>
<button onclick="window.location.href='#openModal'" type="submit" id="Login">Login</button>

<div id="openModal" class="modalDialog">
  <div >
    <form method="POST" action="/index.php" )>
      <a href="#close" title="Close" class="close">X</a>



      <label for="uname"><p align="center" id="UsernameLogin">Nombre de usuario</p></label>
      <input type="text" name="uname" size="58" align="center" style="border-radius: 45px" maxlength="58">

      <label for="psw"><p align="center" id="PasswordLogin">Contraseña</p></label>
      <input type="password" name="psw" required size="58" style="border-radius: 45px" maxlength="58">
      <br /><br />

      <button name="accio" value="login" type="submit" style="border-radius:45px">Acceder</button>
      <br />
      <img id="LogoLogin" src="/images/PMGlogo.png">
    </form>
  </div>

</body>



</html>
