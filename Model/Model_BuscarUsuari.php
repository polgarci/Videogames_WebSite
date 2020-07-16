<?php
function ObtenirDades($conneexio,$username)
{

  $uname="";
  $psw="";
  $consulta = $conneexio->prepare("SELECT Usuario,Contraseña,Nacimiento,Telefono, Empresa, Facturacion,Correo,Nombre,Poblacion,Postal FROM registres WHERE Usuario='$username'");

  $consulta->bindParam(":Usuario", $uname, PDO::PARAM_STR);
  $consulta->bindParam(":Contraseña", $psw, PDO::PARAM_STR);

  $consulta->execute();
  $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

  return $resultado;
}
