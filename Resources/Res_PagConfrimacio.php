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
<?php if($missatge==NULL){ $missatge="FELICIDADES, la compra se ha tramitado perfectamente";}  ?>

<body>

<div id="wrap">

  <header>


    <h1> <a href="http://tdiw-j3.deic-docencia.uab.cat"><img alt="Hola" src="../images/PMG.png"></a> </h1>

  </header>

  <STYLE>A {text-decoration: none;} </STYLE> <!-- Sin esto los links se subrayan y queda bastante feo -->

  <div class="overlay">
    <p id="txt-Informatiu"><?php echo $missatge;?></p>
    <img alt="Hola" id="LogoRegistro2" src="/images/PMGlogo.png">

    <form action="/index.php"  >

      <button id="Confirmar2"  name="accio" value="" >Continuar</button>
    </form>


  </div>



<?php     include_once __DIR__."/Res_Footer.php"    ?>

</div>
</body>
</html>

