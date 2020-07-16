<style>
  <?php include 'index.css'; ?>
</style>

<?php




$var=0;
$lo="izq";

echo '<section class="title-main">';
echo '<br />';
echo '<h1 align="left"> <img src="images/EstrellaNegra.png" width="34" height="34">' . $_GET["Nom"] . '</h1>';
echo '</section>';

echo ' <div id="megawrapCategorias">';

foreach ( $resultat_jocs as $fila) {
  $var=$var+1;

  while ($var > 3)
  {

    $var=$var-3;
    echo $var;
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

  echo ' <section class="box titol"><h6 class="titol-txt">' . $fila["Titol"] . '</h6></section>';
  echo ' <section class="box caratula"><img class="caratula-img"  height="200px" width="125px"  onclick="SelectProducte(`'. $fila["id"]. '`)" src="' . $fila["Imatge"] . '"></section>';
  echo ' <section class="box preu">';
  echo ' <div class="Desplegable2">';
  echo '<a>';
  echo $fila["Mini"];
  echo "</a>";
  echo '</div><h6><em class="txt-preu"> ' . $fila["Preu"] . '€</em></h6><img src="images/pulldown.png" class="pulldown"></section>';
  echo '</div>';

  if ($var==3)
  {
    echo"</div>";
  }

}

echo"</div>";
$connexioo=null;
?>


