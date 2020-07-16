<?php
include_once __DIR__."/../Model/connectBD2.php";
include_once __DIR__ . "/../Model/ValidarUsuari.php";
include_once __DIR__ . "/../Model/TratamientoRegistro.php";
$missatge="El usuario que has elegido ya esta siendo usado, vuelve a intentarlo";
$nom= filter_var($_POST["uname"],FILTER_SANITIZE_STRING);
$data=filter_var($_POST["date"],FILTER_SANITIZE_STRING);
$telefon= filter_var($_POST["tel"],FILTER_VALIDATE_INT);
$direccio=filter_var($_POST["dir"],FILTER_SANITIZE_STRING);
$emp= filter_var($_POST["empresa"],FILTER_SANITIZE_STRING);
$usuari=filter_var($_POST["user"],FILTER_SANITIZE_STRING);
$correo=filter_var($_POST["mail"],FILTER_VALIDATE_EMAIL);
$contraseña=filter_var($_POST["psw"],FILTER_SANITIZE_STRING);
$Poblacio=filter_var($_POST["pob"],FILTER_SANITIZE_STRING);
$Postal=filter_var($_POST["pos"],FILTER_SANITIZE_STRING);

$Booler=TRUE;
if($nom==$_POST["uname"] AND $data==$_POST["date"] AND $telefon==$_POST["tel"] AND $direccio==$_POST["dir"] AND $emp==$_POST["empresa"] AND $usuari==$_POST["user"] AND $correo==$_POST["mail"] AND $contraseña==$_POST["psw"] AND $Poblacio==$_POST["pob"] AND $Postal==$_POST["pos"]) {


  $connexioo =connectaBD2();
  $result=ComprobarUsuari($connexioo,$usuari);

  foreach ($result as $fila)
  {
    if($fila["Usuario"]==$usuari)
    {
      $Booler=FALSE;
    }

  }

  if ($Booler) {
    InserirUsuari($connexioo,$contraseña,$nom,$data,$telefon,$direccio,$correo,$usuari,$emp,$Poblacio,$Postal);
    $missatge="¡Felicidades! Ya fomras parte de PMG";
  }
}

include_once  __DIR__."/../Resources/Res_PagConfrimacio.php";


