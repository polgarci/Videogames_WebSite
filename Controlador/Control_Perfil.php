<?php
include_once __DIR__."/../Model/Model_CambiParametre.php";
include_once __DIR__."/../Model/Model_ModificaQty.php";
include_once __DIR__."/../Model/connectBD.php";

if($_GET["funcio"]==2) {
  Cambiar_Nom($_POST[$_GET["Param"]], $_GET["Param"], $_SESSION["Username"]);
   if($_GET["Param"]=="Usuario")
   {$_SESSION["Username"]=$_POST[$_GET["Param"]];}
  include_once __DIR__."/../Resources/Res_Perfil.php";
}
elseif ($_GET["funcio"]==1){
  if($_POST[$_GET["Param"]]>0) {
    $CantRes=$_POST[$_GET["Param"]]-$_SESSION["Carro_Qty"][$_GET["Param"]];
    $_SESSION["Carro_Qty"][$_GET["Param"]] = $_POST[$_GET["Param"]];
    $connexio=connectaBD();
    $res=ObtenirQty($connexio,$_SESSION["Carro_Titol"][$_GET["Param"]]);
    $bool=FALSE;
    foreach ($res as $fila){

      if($fila["Cantitat"]>$_SESSION["Carro_Qty"][$_GET["Param"]])
      {
        $bool=TRUE;
        $CantRes=$fila["Cantitat"]-$CantRes;
        ModifQty($connexio,$_SESSION["Carro_Titol"][$_GET["Param"]],$CantRes);
      }

    };

    if($bool){ include_once __DIR__ . "/../Resources/Res_Carro.php";}else{$missatge="No tenim existencies d'aquest producte, disculpi les molesties"; include_once __DIR__."/../Resources/Res_PagConfrimacio.php";}

  }else {
    include_once __DIR__ . "/../Resources/Res_Carro.php";
  }
}

