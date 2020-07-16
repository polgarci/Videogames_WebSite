<?php

function RecuperarCerca($conn,$k)
{
  if (isset($k) && $k != ""){

    $k = trim($k); //Guardar las keywords de la url

    $query_string="SELECT * FROM jocs WHERE ";
    $display="";


    $keywords = explode (' ',$k);
    foreach($keywords as $word){
      $query_string .= "Descripcio LIKE '%".$word."%' OR Descripcio LIKE '%".$word."%' OR ";
      $display .= $word." ";
    }
    //$query_string="SELECT * FROM `jocs` WHERE Titol LIKE '%".$display."%' AND SELECT * FROM jocs WHERE Mini LIKE '%".$display."%'";
    $query_string = substr($query_string,0,strlen($query_string)-3);

    $resultados=$conn->prepare($query_string);

    $resultados->execute();

    $res=$resultados->fetchAll(PDO::FETCH_ASSOC);

    return $res;

  }
}

?>
