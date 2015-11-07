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
          poster.className = "";
          detail.className = "";
        }
        else {
          c.add("flipped");
          detail.style.display = "";
          poster.style.display = "none";
          detail.style.width = "440px";
          detail.className = "center-block";
          poster.className = "";
        }
      });
    }
})();
