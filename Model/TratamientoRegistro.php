<?php

function InserirUsuari($connexioo,$contraseña,$nom,$data,$telefon,$direccio,$correo,$usuari,$emp,$Poblacio,$Postal)
{
  $hash = password_hash($contraseña, PASSWORD_DEFAULT);
  $insert_dades = $connexioo->prepare("INSERT INTO registres(Nombre,Nacimiento,Telefono,Facturacion,Empresa,Usuario,Correo,Contraseña,Poblacion,Postal)values('$nom','$data','$telefon','$direccio','$emp','$usuari','$correo','$hash','$Poblacio','$Postal')");
  $insert_dades->execute();
}



