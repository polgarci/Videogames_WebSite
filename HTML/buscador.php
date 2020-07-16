<?php
$key=$_GET['key'];
$array = array();
$con=connectaBD();

$query=$con->prepare($con, "select * from Jocs where Titol LIKE '%{$key}%'");

$query->execute();

$cerca=$query->fetchAll(PDO::FETCH_ASSOC);

foreach ($cerca as $fila)
{
  $array[] = $fila['title'];
}
echo json_encode($array);

//Cerrar conexión?
?>
