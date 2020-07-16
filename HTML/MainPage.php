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


  <script>
      // Set the date we're counting down to
      var countDownDate = new Date("November 16, 2021 15:30:00").getTime();

      // Update the count down every 1 second
      var x = setInterval(function() {

          // Get today's date and time
          var now = new Date().getTime();

          // Find the distance between now and the count down date
          var distance = countDownDate - now;

          // Time calculations for days, hours, minutes and seconds
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);

          // Output the result in an element with id="demo"
          document.getElementById("reloj").innerHTML = days + "d " + hours + "h "
              + minutes + "m " + seconds + "s ";

          // If the count down is over, write some text
          if (distance < 0) {
              clearInterval(x);
              document.getElementById("reloj").innerHTML = "EXPIRED";
          }
      }, 1000);
  </script>


</head>


<body>


<div id="wrap">

  <STYLE>A {text-decoration: none;} </STYLE> <!-- Sin esto los links se subrayan y queda bastante feo -->

  <header>



    <div id="barra">
      <form>
        <input class="barra"  type="search" name="search" placeholder="¿Tenemos lo que buscas?" />
      </form>
    </div>
    <button onclick="window.location.href='HTML/registro.php'" type="submit" id="Registro"><b>Registro</b></button>
    <button onclick="window.location.href='#openModal'" type="submit" id="Login">Login</button>

    <div id="openModal" class="modalDialog">
      <div >
        <form method="POST" action="TratamientoLogin.php">
          <a href="#close" title="Close" class="close">X</a>



          <label for="uname"><p align="center" id="UsernameLogin">Nombre de usuario</p></label>
          <input type="text" name="uname" size="58" align="center" style="border-radius: 45px" maxlength="58">

          <label for="psw"><p align="center" id="PasswordLogin">Contraseña</p></label>
          <input type="password" name="psw" required size="58" style="border-radius: 45px" maxlength="58">
          <br /><br />
          <button type="submit" style="border-radius:45px">Acceder</button>
          <br />
          <img id="LogoLogin" src="/images/PMGlogo.png">
        </form>
      </div>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById('openModal');
        var close = document.getElementsByClassName('close');

        // When the user clicks anywhere outside of the modal, close it

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
                window.open(" ","_top");
            }
        }

    </script>



    <img id="carro" src="images/CarroBlanco.png"   width="120" height="90">

    <h1> <a href="http://tdiw-j3.deic-docencia.uab.cat"><img src="images/PMG.png"></a> </h1>








  </header>

  <!--main content-->


  <div id="main">



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


    <div class="container">

      <br>
      <!-- Slideshow container -->
      <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
          <div class="numbertext">1 / 4</div>
          <img src="images/FIFA20.jpg" width="1000px" height="208px" style="border-radius: 10px">

        </div>

        <div class="mySlides fade" style="display: none">
          <div class="numbertext">2 / 4</div>
          <a href="http://tdiw-j4.deic-docencia.uab.cat/"><img src="images/bannerbctech.png" width="1000px" height="208px" style="border-radius: 10px"></a>
        </div>

        <div class="mySlides fade" style="display: none">
          <div class="numbertext">3 / 4</div>
          <img src="images/WDL-Slider.jpg" width="1000px" height="208px" style="border-radius: 10px">
        </div>

        <div class="mySlides fade" style="display: none">
          <div class="numbertext">4 / 4</div>
          <img src="images/Cyberpunk-2077-2.jpg" width="1000px" height="208px" style="border-radius: 10px">
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <br>

      <!-- The dots/circles -->
      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
      </div>




      <?php



      shuffle($Jocs);



      $var=0;
      $total=0;
      $lo="izq";


      echo '<section class="title-main">';
      echo '<h1 align="left"> <img src="../images/RelámpagoNegro.png" width="34" height="27"> Ofertas relámpago </h1><div id="reloj"></div>';
      echo  '</section>';




      echo '<div id="megawrapRelampago">';

      foreach ( $Jocs as $fila) if ($total<3) {
        $var=$var+1;
        $total=$total+1;

        while ($var > 3)
        {

          $var=$var-3;

        }

        if ($var == 1)
        {
          echo ' <div class="wrapper">';
          echo ' <div class="box izq">';

        }

        elseif ($var == 2)
        {
          echo ' <div class="box cent">';
        }

        elseif ($var == 3)
        {
          echo ' <div class="box der">';
        }
        ?>
         <section class="box titolRelampago"><h6 class="titol-txt"><?php echo $fila["Titol"]?></h6></section>
           <section class="box caratula"><img class="caratula-img"  height="200px" width="125px" src="<?php echo $fila["Imatge"]?>" onclick="SelectProducte('<?php  echo $fila["id"]?>')"></section>
            <section class="box preu">
              <div class="Desplegable2">
                <a>
        <?php echo $fila["Mini"] ?>
                </a>
              </div><h6><em class="txt-preu"><?php  echo number_format ( $fila["Preu"]*0.7 , 2)?>€</em></h6><img src="images/pulldown.png" class="pulldown" class="txt-preu"></section>
       <?php


        echo '</div>';

        if ($var==3)
        {
          echo"</div>";
        }

      }

      echo"</div>";


      $total=0;

      echo '<section class="title-main">';
      echo '<h1 align="left"> <img src="images/EstrellaNegra.png" width="34" height="34"> Destacados </h1>';
      echo '</section>';

      echo ' <div id="megawrap">';

      $Jocs=array_slice($Jocs,3);

      foreach ( $Jocs as $fila) if ($total<9) {
        $var=$var+1;
        $total=$total+1;

        while ($var > 3)
        {

          $var=$var-3;

        }

        if ($var == 1)
        {
          echo ' <div class="wrapper">';
          echo ' <div class="box izq">';

        }

        elseif ($var == 2)
        {
          echo ' <div class="box cent">';
        }

        elseif ($var == 3)
        {
          echo ' <div class="box der">';
        }
        ?>
        <section class="box titol"><h6 class="titol-txt"><?php echo  $fila["Titol"]?></h6></section>
          <section class="box caratula"><img class="caratula-img"  height="200px" width="125px" onclick="SelectProducte('<?php  echo $fila["id"]?>')" src="<?php echo $fila["Imatge"] ?>"></section>
           <section class="box preu">
             <div class="Desplegable2">
              <a>
             <?php echo $fila["Mini"]?>
              </a>
            </div><h6><em class="txt-preu"><?php echo $fila["Preu"] ?>€</em></h6><img src="images/pulldown.png" class="pulldown" class="txt-preu"></section>

        <?php
        echo '</div>';

        if ($var==3)
        {
          echo"</div>";
        }

      }

      echo"</div>";
      $connexioo=null;
      ?>







    </div>



    f
  </div>






  <footer>

    <div class="col-container">
      <img src="../images/BanderaEspaña.png" width="63" height="63"><input id="Triangulo" type="image" src='images/Triángulo.png' width="18" height="16" onmouseover="this.src='images/TriánguloBlanco.png';" onmouseout="this.src='images/Triángulo.png';" /></input>
      <a><div><img id="uk" src="../images/BanderaUK.png" width="63" height="63"></div></a>


      <div class="col">
        <ul>
          <a href="/HTML/about.php">
            <li class="txt-col">Acerca de #PMG</li></a>
          <li class="txt-col">Trabaja con nosotros</li>
          <li class="txt-col">Contacto</li>
        </ul>
      </div>

      <div class="col">
        <ul>
          <li class="txt-col">Preguntas frecuentes</li>
          <li class="txt-col">Soporte</li>
          <li class="txt-col">Politica de privacidad</li>
        </ul>
      </div>


      <div class="col">
        <ul>
          <li class="txt-col">Compromiso #PMG</li>
          <li class="txt-col">Ayúdanos a crecer</li>
          <li class="txt-col">Términos de uso</li>
        </ul>
      </div>





    </div>

    <a href="../HTML/about.html"><img class="col-img" src="../images/PMGlogo.png" width="183" height="183" style="float:right"></a>



  </footer>

</div> <!--div del wrap que hace que al hacer zoom out se mantenga centrado-->
</body>



</html>
