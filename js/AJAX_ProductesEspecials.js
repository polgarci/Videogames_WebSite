function SelectProducteEspecials(producte,especial) {

  $(document).ready(function () {

    $.ajax({
      url: "index.php?producte="+producte+"&accio=vendre&especial="+especial , success: function (resultat) {
        $(".container").html(resultat);

      }

    });

  });
}
