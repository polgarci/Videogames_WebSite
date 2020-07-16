<?php
$connexio=connectaBD();

$consulta_jocs=connectaBD()->prepare("SELECT * FROM jocs WHERE id_categoria1 =(SELECT id FROM categorias WHERE NOM=' ".$_GET['accio']."') OR id_categoria2= (SELECT id FROM categorias WHERE NOM='".$_GET['accio']."')");
$consulta_jocs->execute();
$resultat_jocs=$consulta_jocs->fetchAll(PDO::FETCH_ASSOC);


