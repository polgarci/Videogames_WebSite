

function Search(cerca) {

  document.write(cerca);

  $(document).ready(function () {

    $.ajax({
      url: "index.php?search=" + cerca, success: function (resultat) {
        $(".container").html(resultat); $(".col-container").html(
            );

      }

    });

  });

  return false;
};

