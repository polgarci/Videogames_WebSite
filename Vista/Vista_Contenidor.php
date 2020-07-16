


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
    <section class="box caratula"><img class="caratula-img"  height="200px" width="125px" src="<?php echo $fila["Imatge"]?>" onclick="SelectProducteEspecials('<?php  echo $fila["id"]?>',1)"></section>
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
  echo '<h1 align="left" id="titolDestacados"> <img src="images/EstrellaNegra.png" width="34" height="34"> Destacados </h1>';
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

