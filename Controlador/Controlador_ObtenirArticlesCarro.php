<?php
include_once __DIR__."/../Model/connectBD.php";




$titol=@$_SESSION["Carro_Titol"];

include_once __DIR__."/../Vista/Vista_ObtenirCarro.php";
