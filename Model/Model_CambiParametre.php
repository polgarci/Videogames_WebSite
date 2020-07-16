<?php
function Cambiar_Nom ($Dato, $Parametre, $NomUsuari){
  $connexio=connectaBD();
  if ($Parametre=='Contraseña')
  {
    $Dato = password_hash($Dato, PASSWORD_DEFAULT);
  }
  $insert_dades = $connexio->prepare("UPDATE registres SET $Parametre='$Dato' WHERE Usuario='$NomUsuari'");
  $insert_dades->execute();



}
