function showDetails(image, table) {
  var current_html = document.getElementById("details_and_poster").innerHTML;
  if (current_html == image) {
    document.getElementById("details_and_poster").innerHTML = table;
  }
  else {
    document.getElementById("details_and_poster").innerHTML = image;
  }
}
