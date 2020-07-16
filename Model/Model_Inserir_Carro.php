<?php
function Inserir_Carro($Titol,$Prreu,$Qty,$id,$Imatge){


  $_SESSION["Carro_Titol"][]=$Titol;
  $_SESSION["Carro_Prreu"][]=$Prreu;
  $_SESSION["Carro_Qty"][]=$Qty;
  $_SESSION["Carro_id"][]=$id;
  $_SESSION["Carro_Imatge"][]=$Imatge;


}
