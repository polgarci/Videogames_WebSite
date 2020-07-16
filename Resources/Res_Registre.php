<!DOCTYPE html>
<html lang="es">


<head>


  <meta charset="utf-8"/>
  <meta name="viewport" content="initial-scale=1.0, width=device-width, user-scalable=yes"/>
  <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
  <link rel="stylesheet" type="text/css" href="../css/registro.css">
  <title>This is #PMG</title>
<link rel="icon"
        type="image/png"
        href="../favicon.ico">






</head>


<body>

<div id="wrap">

  <header>


    <h1> <a href="http://tdiw-j3.deic-docencia.uab.cat"><img src="../images/PMG.png"></a> </h1>

  </header>

  <STYLE>A {text-decoration: none;} </STYLE> <!-- Sin esto los links se subrayan y queda bastante feo -->

  <div class="overlay">
    <h1 id="Bienvenidos">BIENVENIDO A #PMG</h1>

<img id="LogoRegistro" src="/images/PMGlogo.png">

    <form method="post" action="/Controlador/Controlador_DadesRegistre.php"  >
      <h1 id="Contacto"> Información personal </h1>
      <label for="uname"><p align="center" class="NombreRegistro">Nombre*</p></label>
      <input class="inputDefaultRegistro" type="" name="uname" size="63" required style="border-radius: 45px">

      <label for="uname"><p align="center" class="DefaultLogin">Fecha de nacimiento*</p></label>
      <input id="inputDateRegistro" type="date" name="date" required size="63" style="border-radius: 45px">

      <label for="uname"><p align="center" class="DefaultLogin">Teléfono móvil</p></label>
      <input class="inputDefaultRegistro" type="tel" name="tel" size="63" style="border-radius: 45px">

      <label for="uname"><p align="center" class="DefaultLogin">Poblacion*</p></label>
      <input class="inputDefaultRegistro" type="text" name="pob" size="30" required style="border-radius: 45px">

      <label for="uname"><p align="center" class="DefaultLogin">Codigo Postal*</p></label>
      <input class="inputDefaultRegistro" type="number" name="pos" size="5" required style="border-radius: 45px">

      <label for="uname"><p align="center" class="DefaultLogin">Dirección de facturación*</p></label>
      <input class="inputDefaultRegistro" type="text" name="dir" size="63" required style="border-radius: 45px">

      <label for="psw"><p align="center" class="DefaultLogin">Empresa</p></label>
      <input class="inputDefaultRegistro" type="word" name="empresa" size="63" style="border-radius: 45px">


      <h1 id="Registro"> Credenciales </h1>
      <label for="uname"><p align="center" class="UsernameRegistro">Nombre de usuario*</p></label>
      <input class="inputDefaultRegistro" type="text" name="user" required size="63" style="border-radius: 45px">

      <label for="uname"><p align="center" class="DefaultLogin">Correo electrónico*</p></label>
      <input class="inputDefaultRegistro" type="email" name="mail" required size="63" style="border-radius: 45px">

      <label for="psw"><p align="center" class="DefaultLogin">Contraseña*</p></label>
      <input class="inputDefaultRegistro" type="password" name="psw" required size="63" style="border-radius: 45px">

      <button id="Confirmar" name="accio" value="main" ">Confirmar</button>
    </form>


  </div>




<?php include_once __DIR__."/Res_Footer.php"?>

</div>
</body>
</html>
