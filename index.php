<?php
include __DIR__ . '/Model/connectBD.php';
session_start();
@$accio= $_GET['accio'];
@$comp=$_POST['accio'];
if($comp=='login')
{
  @$accio=$_POST['accio'];
}
switch ($accio)
{
  case'ApuntarCompra':
    include_once __DIR__.'/Controlador/Controlador_CargarCompra.php';
     break;
case 'vendre':
    include_once __DIR__ .'/Controlador/Controlador_Producte.php';
    break;
  case 'buidar':
    include_once __DIR__ .'/Controlador/Controlador_Buidar_Carro.php';
    break;
case 'registro':
    include_once __DIR__.'/Resources/Res_Registre.php';
    break;
case 'login':
    include_once __DIR__.'/Controlador/Controlador_login.php';
    break;
case 'perfil':
    include_once __DIR__.'/Resources/Res_Perfil.php';
    break;
  case 'cambi':
    include_once __DIR__.'/Controlador/Control_Perfil.php';
    break;

  case 'carro':

    include __DIR__ .'/Resources/Res_Carro.php';
    break;
  case 'Compras':

    include __DIR__ .'/Controlador/Controlador_InserirCarro.php';



    break;
case 'cerrar':
  $_SESSION["Username"]=NULL;
  session_destroy();

  include __DIR__ .'/Controlador/controlador_MainPage.php';
  break;

case 'search':

  if (isset($_GET['k']) && ($_GET['k'] != "")) {

    include_once __DIR__ . '/Controlador/Controlador_cerca.php';
  }
  break;

case 'ConfirmarCompra':
    include_once __DIR__.'/Resources/Res_PagConfrimacio.php';
    break;

case 'categories':

  include_once __DIR__ . '/Controlador/Controlador_Categories.php';

break;

default:
  include __DIR__ .'/Controlador/controlador_MainPage.php';
  break;

}












?>
