<?php
include_once __DIR__."/../Model/connectBD.php";
include_once __DIR__.'/../Model/Model_cerca.php';
include_once __DIR__."/../Model/Model_Main_Page.php";

$conn=connectaBD();
$categorias=ObtenirCategories($conn);
if (isset($_GET['k']) && $_GET['k'] != "") {

  $cerca = RecuperarCerca($conn, $_GET['k']);


  include __DIR__.'/../Vista/Vista_Main_Page.php';


}
?>
