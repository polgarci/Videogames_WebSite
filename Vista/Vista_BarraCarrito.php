<?php

echo '<p style="grid-area:txt-barra-left">Numero de productos diferentes:  '.$mida.'</p>';
echo '<p style="grid-area:txt-barra-center">Precio total:  '.$PreTotal.' €</p>';
echo '<p style="grid-area:txt-barra-right"> Ultimo producto comprado: '.$_SESSION["Carro_Titol"][$mida-1].' </p>';
