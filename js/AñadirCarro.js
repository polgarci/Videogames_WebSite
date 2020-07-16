
function ComprarProducte() {


    $.ajax({url: "index.php?accio=Compras&Carro_Titol="+$("#ParamTitol").val()+"&Carro_Prreu="+$("#ParamPreu").val()+"&Carro_Imatge="+$("#ParamImatge").val()+"&Carro_Qty="+$("#NumCantidad").val()+"&Carro_id="+$("#ParamID").val(), success: function (resultat) { $("#BarraCarro").html(resultat);

      }});



}


function CargarCompra(){
    $.ajax({url:"index.php?accio=ApuntarCompra" , success: function (resultat) {BuidarCarro(); window.location.replace("http://tdiw-j3.deic-docencia.uab.cat/Resources/Res_PagConfrimacio.php");

      }})

}


function AlertaNoUsuari() { alert("Para comprar juegos en #PMG debes ser un usuario registrado.\n\nAsí garantizamos la seguridad de tus compras y te ofrecemos una atención personalizada. 🧡");}

function BuidarCarro(){
  $("#CarroArticles").html("<ul><p>No teneis nada en el carro</p></ul>")
  $.ajax({url: "index.php?accio=buidar"} );
}



function SumarCantidad(){
  var Cantitat=$("#NumCantidad").val();
  Cantitat++;
 document.getElementById("NumCantidad").setAttribute("value",Cantitat.toString());;
  document.getElementById("ValorCantidad").innerHTML=Cantitat.toString();
}

function RestarCantidad(){
  var Cantitat=$("#NumCantidad").val();
 if(Cantidad>0) {
   Cantitat--;
   document.getElementById("NumCantidad").setAttribute("value", Cantitat.toString());

   document.getElementById("ValorCantidad").innerHTML = Cantitat.toString();
 }
}
