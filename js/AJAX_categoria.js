

function SelectCategory(categoria) {
  $(document).ready(function () {

      $.ajax({
        url: "index.php?accio=categories&Nom=" + categoria, success: function (resultat) {
          $(".container").html(resultat);

        }

      });

  });
};

