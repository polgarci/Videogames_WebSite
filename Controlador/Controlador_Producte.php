<?php
include_once __DIR__ .'/../Model/Model_Producte.php';
$connexio=connectaBD();
$resultat_producte=ObtenirJocsDeCategoria($connexio,$_GET["producte"]);
$Bool=False;
if(@$_GET["especial"]==1)
{$Bool=TRUE;}


include_once __DIR__ .'/../Vista/Vista_Producte.php';


