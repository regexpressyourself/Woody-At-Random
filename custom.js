/*
This function makes the "flipping" motion for the poster/summary on the 
film page
*/
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


// Make the table's rows link the film
jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.document.location = $(this).data("href");
    });
});


/*
This one just shows the "Refine Selections" form on the filmography page. It
is pretty simple, removes the "display: none" on the form, and adds it to
the button.
*/
function showForm() {
  window.document.getElementById("film-form").style.display = "";
  window.document.getElementById("refine-button").style.display = "none";

}


/*
This is the most fun function. I wanted to learn ajax to make the "refine 
selections" menu on filmography.php easy to mess around with, without having to 
constantly re-submit your selections. This function handles all the ajax.

How it works:

It grabs the genre, written, directed, and acted values from the form and
sends them to a php page that recreates the table based on the values passed to
it. Finally, the appropriate table is populated on the page.
*/
function adjustTable() {
  var genre = document.getElementById("genre").value;
  var written = document.getElementById("written").value;
  var directed = document.getElementById("directed").value;
  var acted = document.getElementById("acted").value;
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      document.getElementById("filmography-table").innerHTML = xmlhttp.responseText;
    }
  };
  xmlhttp.open("GET", "generateTable.php?g=" + genre + "&w=" + 
               written + "&d=" + directed + "&a=" + acted, true);
  xmlhttp.send();
}

