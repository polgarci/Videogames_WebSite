
function Apareixer_Input($id_Camp,$funcio){
  if ($id_Camp != 'Contraseña') {
    document.getElementById($id_Camp).innerHTML = "<form method=\"POST\" action=\"/index.php?accio=cambi&Param=" + $id_Camp + "&funcio=" + $funcio + "\">\n" +
      "              <input type=\"text\" name=\"" + $id_Camp + "\" size=\"30\" align=\"left\" style=\"border-radius: 45px\" maxlength=\"58\">\n" +
      "               <button  type=\"submit\" name=\"accio\" value=\"cambi\"> Acceptar</button>\n" +
      "            </form>";
  }

  else
    document.getElementById($id_Camp).innerHTML = "<form method=\"POST\" action=\"/index.php?accio=cambi&Param=" + $id_Camp + "&funcio=" + $funcio + "\">\n" +
      "              <input type=\"password\" name=\"" + $id_Camp + "\" size=\"30\" align=\"left\" style=\"border-radius: 45px\" maxlength=\"58\">\n" +
      "               <button  type=\"submit\" name=\"accio\" value=\"cambi\"> Acceptar</button>\n" +
      "            </form>";


}
