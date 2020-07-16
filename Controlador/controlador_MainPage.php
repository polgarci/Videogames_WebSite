<?php
include_once __DIR__."/../Model/Model_Main_Page.php";

$connexio=connectaBD();

$categorias=ObtenirCategories($connexio);
$Jocs = ObtenirJocs($connexio);

include_once __DIR__."/../Vista/Vista_Main_Page.php";
