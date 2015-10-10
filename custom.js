

function showDetails() {
  var detail = document.getElementById("details");
  var poster = document.getElementById("poster");
  if (detail.style.display == "none") {
    detail.style.display = "none";
    poster.style.display = "block";
    poster.className = "col-md-6";
    detail.className = "";
  }
  else {
    detail.style.display = "block";
    poster.style.display = "none";
    detail.className = "col-md-6";
    poster.className = "";
  }
}

