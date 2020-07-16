
var modal = document.getElementById('openModal');
var close = document.getElementsByClassName('close');



window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
      window.open(" ","_top");
    }
  };

