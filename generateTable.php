<?php
/*
This page handles the "refine selections" functionality of the filmography
page. It got to be too big to fit in functions.php, so I gave it its own page.
It is passed four $_GET variables from the filmography form.
 */

require_once("db_connection.php");
include("functions.php");

// $g is the genre
if ($_GET["g"]) {
  $g = $_GET["g"];
}

// $w is whether or not Woody wrote the film.
if ($_GET["w"]) {
  $w = $_GET["w"];
}

// $w is whether or not Woody directed the film.
if ($_GET["d"]) {
  $d = $_GET["d"];
}

// $w is whether or not Woody starred in the film.
if ($_GET["a"]) {
  $a = $_GET["a"];
}

// Get the headers out of the way...
$finalString = "<tr>";
$finalString .= "<th>Number</th>";
$finalString .= "<th>Title</th>";
$finalString .= "<th>Release Year</th>";
$finalString .= "<th>Genre</th>";
$finalString .= "<th>Wrote?</th>";
$finalString .= "<th>Acted?</th>";
$finalString .= "<th>Directed?</th>";
$finalString .= "<th>Runtime<br />(Minutes)</th>";
$finalString .= "</tr>";

foreach (range(1,55) as $number) {
  // This for loop goes through each film
  $film_info_array = find_selected_film_as_array($number);

  /*
  $validChoice starts as true, and is changed to false if the film does 
  not match the input on the form.
   */
  $validChoice = true;

  /*
    Each $_GET variable is checked against the default value. If it has been 
    changed, it is compared with the film in question. If it is not a match,
    $validChoice is changed to false. Every value passed to the form must
    match the corresponding value for the film, or the film will not be displayed.

    i.e. If the genre matches, but the written variable does not, the film
    will not be displayed.
   */
  if ($g != "any") {
    if (strpos($film_info_array[3], $g) === false) {
      $validChoice = false;
    }
  }

  if ($w !== "either") {
    if (strpos($film_info_array[4], $w) === false) {
      $validChoice = false;
    }
  }
  if ($a !== "either") {
    if (strpos($film_info_array[5], $a) === false) {
      $validChoice = false;
    }
  }
  if ($d !== "either") {
    if (strpos($film_info_array[6], $d) === false) {
      $validChoice = false;
    }
  }

  /*
  After all is said and done, if the film fell within the given constraints, 
  it is added to the table 
   */
  if ($validChoice == true) {
    $finalString .= create_table_item($film_info_array, $number);
  }
}

// Print it out to the table
echo $finalString;
?>
