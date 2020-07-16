<header>

  <div id="barra">
    <form method="get" id="busqueda" onsubmit="submit(search)">

      <input class="barra"  type="search" name="search" placeholder="¿Tenemos lo que buscas?" />


    </form>
  </div>

  <?php

  if(@$_SESSION["Username"]!=NULL)
  {include_once __DIR__."/../Resources/Res_SessioUsuari.php";}
  else{
    include_once __DIR__."/../Resources/Resource_LoginRegisterButtons.php";
  }?>

  </div>


  <a id="carro"href="/index.php?accio=carro"> <img  src="/images/CarroBlanco.png"   width="120" height="90"></a>


  <h1> <a href="/index.php"><img src="/images/PMG.png"></a> </h1>


</header>
