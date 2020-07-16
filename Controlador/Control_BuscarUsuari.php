<?php
include_once __DIR__.'/../Model/connectBD.php';
include_once __DIR__.'/../Model/Model_BuscarUsuari.php';
$conneexio=connectaBD();
$username = $_SESSION['Username'];

$resultado=ObtenirDades($conneexio,$username);

foreach ($resultado as $fila) {
  $_SESSION["Username"] = $fila["Usuario"];
  $_SESSION["Telefono"] = $fila["Telefono"];
  $_SESSION["Facturacion"] = $fila["Facturacion"];
  $_SESSION["Empresa"] = $fila["Empresa"];
  $_SESSION["Correo"] = $fila["Correo"];
  $_SESSION["Nombre"] = $fila["Nombre"];
  $_SESSION["Nacimiento"] = $fila["Nacimiento"];
  $_SESSION["Correo"] = $fila["Correo"];
  $_SESSION["Poblacion"] = $fila["Poblacion"];
  $_SESSION["Postal"] = $fila["Postal"];
}


include_once __DIR__.'/../Vista/Vista_Perfil.php';

