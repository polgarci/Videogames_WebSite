<?php

include_once __DIR__."/../Model/connectBD.php";
include_once __DIR__."/../Model/Model_Obtenir_Factures.php";

$connexio=connectaBD();



$cons=ObtenirFactures($connexio,$_SESSION["Username"]);


include_once __DIR__."/../Vista/Vista_ConfirmacioCompra.php";
