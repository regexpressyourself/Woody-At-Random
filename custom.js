(function() {
    var cards = document.querySelectorAll(".card.effect__click");
    for ( var i  = 0, len = cards.length; i < len; i++ ) {
      var card = cards[i];
      clickListener( card );
    }

    function clickListener(card) {
      card.addEventListener( "click", function() {
        var c = this.classList;
        var detail = window.document.getElementById("details");
        var poster = window.document.getElementById("poster");
        if (c.contains("flipped")){
          c.remove("flipped");
          detail.style.display = "none";
          poster.style.display = "";
          poster.className = "center-block";
          detail.className = "";
        }
        else {
          c.add("flipped");
          detail.style.display = "";
          poster.style.display = "none";
          detail.style.width = "420px";
          detail.className = "center-block";
          poster.className = "";
        }
      });
    }
})();
jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.document.location = $(this).data("href");
    });
});
function showForm() {
  window.document.getElementById("film-form").style.display = "";
  window.document.getElementById("refine-button").style.display = "none";

}

function showHint(str) {
  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
      }
    };
    xmlhttp.open("GET", "gethint.php?q=" + str, true);
    xmlhttp.send();
  }
}
