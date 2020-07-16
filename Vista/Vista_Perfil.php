

<ul id="DadesUsuari">
  <li class="parametre"><b class="TitolParametre"style="grid-area=Nombre; color: inherit" href="#">Nombre</b>
    <ul class="Subllista_paramtre">
      <li id="Nombre"><?php echo $_SESSION["Nombre"]?></li>
      <li style="text-align: left;">
        <button type="submit" class="Cambiar" onclick="Apareixer_Input('Nombre',2)">Cambiar nombre</button>

      </li>
    </ul>

  </li>
  <li class="parametre"><b class="TitolParametre"style="grid-area=Nacimiento; color: inherit" href="#">Fecha de nacimiento</b>
    <ul class="Subllista_paramtre">
      <li id="Nacimiento"><?php echo $_SESSION["Nacimiento"]?></li>
      <li><button type="submit" class="Cambiar" onclick="Apareixer_Input('Nacimiento',2)">Cambiar fecha</button></li>
    </ul>
  </li>
  <li class="parametre"><b class="TitolParametre"style="grid-area=Telefono;color: inherit" href="#">Telefono</b>
    <ul class="Subllista_paramtre">
      <li id="Telefono"><?php echo $_SESSION["Telefono"]?></li>
      <li><button type="submit" class="Cambiar" onclick="Apareixer_Input('Telefono',2)">Cambiar telefono</button></li>
    </ul>
  </li>
  <li class="parametre"><b class="TitolParametre"style="grid-area=Facturacion;color: inherit" href="#">Direccion</b>
    <ul class="Subllista_paramtre">
      <li id="Facturacion"><?php echo $_SESSION["Facturacion"]?></li>
      <li><button type="submit" class="Cambiar" onclick="Apareixer_Input('Facturacion',2)">Cambiar direccion</button></li>
    </ul>
  </li>

  <li class="parametre"><b class="TitolParametre"style="grid-area=Poblacion;color: inherit" href="#">Poblacion</b>
    <ul class="Subllista_paramtre">
      <li id="Poblacion"><?php echo $_SESSION["Poblacion"]?></li>
      <li><button type="submit" class="Cambiar" onclick="Apareixer_Input('Poblacion',2)">Cambiar Poblacion</button></li>
    </ul>
  </li>

  <li class="parametre"><b class="TitolParametre"style="grid-area=Facturacion;color: inherit" href="#">Codigo Postal</b>
    <ul class="Subllista_paramtre">
      <li id="Postal"><?php echo $_SESSION["Postal"]?></li>
      <li><button type="submit" class="Cambiar" onclick="Apareixer_Input('Postal',2)">Cambiar codigo postal</button></li>
    </ul>
  </li>
  <li class="parametre"><b class="TitolParametre"style="grid-area=Empresa;color: inherit" href="#">Empresa</b>
    <ul class="Subllista_paramtre">
      <li id="Empresa"><?php echo $_SESSION["Empresa"]?></li>
      <li><button type="submit" class="Cambiar" onclick="Apareixer_Input('Empresa',2)">Cambiar empresa</button></li>
    </ul>
  </li>
  <li class="parametre"><b class="TitolParametre"style="grid-area=Usuario; color: inherit" href="#">Usuario</b>
    <ul class="Subllista_paramtre">
      <li id="Usuario"><?php echo $_SESSION["Username"]?></li>
      <li><button type="submit" class="Cambiar" onclick="Apareixer_Input('Usuario',2)">Cambiar usuario</button></li>
    </ul>
  </li>
  <li class="parametre"><b class="TitolParametre"style="grid-area=Correo;color: inherit" href="#">Correo</b>
    <ul class="Subllista_paramtre">
      <li id="Correo"><?php echo $_SESSION["Correo"]?></li>
      <li><button type="submit" class="Cambiar" onclick="Apareixer_Input('Correo',2)">Cambiar correo</button></li>
    </ul>
  </li>
  <li class="parametre"><b class="TitolParametre"style="grid-area=Contrasenya ;color: inherit" href="#">Contraseña</b>
    <ul class="Subllista_paramtre">
      <li id="Contraseña"></li>
      <li><button type="submit" class="Cambiar" onclick="Apareixer_Input('Contraseña',2)">Cambiar contraseña</button></li>
    </ul>
  </li>
</ul>
