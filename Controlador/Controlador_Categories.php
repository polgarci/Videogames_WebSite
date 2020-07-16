<?php
include_once __DIR__.'/../Model/Model_Categories.php';
$connexioo=connectaBD();

$resultat_jocs=RecuperarCategories($connexioo,$_GET["Nom"]);

include_once __DIR__.'/../Vista/Vista_categories.php';
?>
