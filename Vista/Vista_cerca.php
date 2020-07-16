<style>
  <?php include 'index.css'; ?>
</style>



<div class="container">

  <?php




  $var=0;
  $total=0;
  $lo="izq";



  $n_resultados=0;

  if (isset($cerca) && $cerca != "") {
    foreach ($cerca as $fila) {
      $n_resultados = $n_resultados + 1;

    }
  }






  echo '<section class="title-main">';
  echo '<br />';
  if ($n_resultados==0)
    echo '<h1 align="left" id="titolDestacados"> <img src="images/LupaNegra.png" width="34" height="34"> No hemos encontrado nada :(</h1>';

  elseif ($n_resultados == 1)
    echo '<h1 align="left" id="titolDestacados"> <img src="images/LupaNegra.png" width="34" height="34"> ¡Solo una coincidencia! ¿Acertamos? </h1>';

  else
    echo '<h1 align="left" id="titolDestacados"> <img src="images/LupaNegra.png" width="34" height="34"> Tu búsqueda ha devuelto ' . $n_resultados . ' resultados</h1>'; //Tu búsqueda de $_GET['k']
  echo '</section>';

  echo ' <div id="megawrap">';

  // $cerca = array_slice($cerca, 3);

  foreach ($cerca as $fila) {

    $var = $var + 1;
    $total = $total + 1;

    while ($var > 3) {

      $var = $var - 3;

    }

    echo "<br /><br /><br />";
    if ($var == 1) {
      echo ' <div class="wrapper">';
      echo ' <div class="box izq">';

    } elseif ($var == 2) {
      echo ' <div class="box cent">';
    } elseif ($var == 3) {
      echo ' <div class="box der">';
    }
    ?>
    <section class="box titol"><h6 class="titol-txt"><?php echo $fila["Titol"] ?></h6></section>
    <section class="box caratula"><img class="caratula-img" height="200px" width="125px"
                                       onclick="SelectProducte('<?php echo $fila["id"] ?>')"
                                       src="<?php echo $fila["Imatge"] ?>"></section>
    <section class="box preu">
      <div class="Desplegable2">
        <a>
          <?php echo $fila["Mini"] ?>
        </a>
      </div>
      <h6><em class="txt-preu"><?php echo $fila["Preu"] ?>€</em></h6><img src="images/pulldown.png" class="pulldown"
                                                                          class="txt-preu"></section>

    <?php
    echo '</div>';

    if ($var == 3) {
      echo "</div>";
    }

  }

  echo "</div>";

  if ($var != 3) {
    echo "</div>";
  }

  $conn=null;
  ?>


</div>

