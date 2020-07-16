<?php
function ObtenirFactures($connexio, $usuario)
{
  $consulta = $connexio->prepare('SELECT f.ID_Factura,l.ID_Compra, j.Titol, l.Cantidad, l.Precio, j.Imatge, f.fecha FROM Facturas f,Lineas_Compra l,jocs j Where f.Usuario="' . $usuario . '" AND l.ID_Factura=f.ID_Factura AND l.id=j.id  ORDER BY 1');
  $consulta->execute();
  $cons = $consulta->fetchAll(PDO::FETCH_ASSOC);
  return $cons;
}
