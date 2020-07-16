<?php
include_once __DIR__.'/../Model/connectBD.php';
include_once __DIR__ . "/../Model/TratamientoLogin.php";
$conneexio=connectaBD();
$username = $_POST['uname'];
$uname=NULL;
$psw=NULL;
$Autoritzacio=FALSE;

$resultado=BuscarUsuario($conneexio,$username,$uname,$psw);
foreach ($resultado as $fila)
{


  if(password_verify($_POST["psw"], $fila["Contraseña"] ))
  {
    $Autoritzacio=TRUE;
    $username=$fila["Usuario"];
  }
}
if($Autoritzacio==TRUE)
{
$_SESSION["Username"]=$username;
include_once __DIR__ . "/../Resources/Res_LoginPage.php";

}
else{$missatge ="Has introducido erroneamente las credenciales, por favor vuelvelo a intentar"; include_once __DIR__."/../Resources/Res_PagConfrimacio.php";};





