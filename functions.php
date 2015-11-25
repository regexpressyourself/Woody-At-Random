<?php  
/*
This page houses most of the php functions used throughout the site, to help 
readability on each page.
 */

function confirm_query($result_set) {
  // This function just makes sure the database query went through
  if (!$result_set) {
    die("Database query failed.");
  }
}

/*
function mysql_prep($string) {
    global $connection;
    $escaped_string = mysqli_real_escape_string($connection, $string);
    return $escaped_string;
}
 */

function redirect_to($new_location) {
  // This function just redirects the user to a new page.
  header("Location: " . $new_location);
  exit;
}

function get_number_of_films() {
  // This function is used to get the total number of films in the database
  global $connection;

  $query = "SELECT * ";
  $query .= "FROM woody_table";
  $result = mysqli_query($connection, $query);
  confirm_query($result);
  $num_rows = mysqli_num_rows($result);
  return $num_rows;
}

function generate_random_id() {
  // Generate a random film id for the random recommendations
  $num_rows = get_number_of_films();
  $random_number = rand(1, $num_rows);
  return $random_number;
}

function binary_to_words($binary_num) {
  /*
  Since the binary values are stored as binary, this function converts them to
  "Yes" or "no" for 1 and 0, respectively.
   */
  if ($binary_num != 0) {
    return "Yes";
  }
  else {
    return "No";
  }
}

function get_film_by_id($movie_id) {
  // Retrieve a film with a given id
  global $connection;

  $safe_id = mysqli_real_escape_string($connection, $movie_id);

  $query = "SELECT * ";
  $query .= "FROM woody_table ";
  $query .= "WHERE id = {$safe_id} ";
  $query .= "LIMIT 1";
  $movie_set = mysqli_query($connection, $query);
  confirm_query($movie_set);

  if ($movie = mysqli_fetch_assoc($movie_set)) {
    return $movie;
  }
  else {
    return null;
  }
}

function find_selected_film_as_array($id){
  // This function takes an id of a film, and returns its data as an array

  global $current_film;
  global $film_name;
  global $release_date;
  global $genre;
  global $summary;
  global $wrote;
  global $acted;
  global $directed;
  global $runtime;
  global $female_lead;
  global $male_lead;
  global $quote;
  global $image_location;
  global $film_id;

  $current_film = get_film_by_id($id);
  $film_name = htmlentities($current_film["film_name"]);
  $film_id = htmlentities($current_film["id"]);
  $release_date = htmlentities($current_film["release_date"]);
  $genre = ucwords(($current_film["genre"]));
  $summary = htmlentities($current_film["summary"]);
  $wrote = htmlentities(binary_to_words($current_film["wrote"]));
  $acted = htmlentities(binary_to_words($current_film["acted"]));
  $directed = htmlentities(binary_to_words($current_film["directed"]));
  $runtime = htmlentities($current_film["runtime"]);
  $female_lead = htmlentities($current_film["female_lead"]);
  $male_lead = htmlentities($current_film["male_lead"]);
  $quote = htmlentities($current_film["quote"]);
  $image_location = htmlentities($current_film["image_location"]);
  return array(  $film_id, $film_name,  $release_date,  $genre, $wrote,  $acted,  $directed,  $runtime);
}  

function find_selected_film() {
  /*
  This allows me to call a films name, genre, etc. as a variable when the 
  id has been passed to the url. If there is no id in the url, it will randomly 
  generate one. It is super useful in recommend.php, as it ensure that a film 
  will always be displayed on the page.
   */
  global $current_film;
  global $film_name;
  global $release_date;
  global $genre;
  global $summary;
  global $wrote;
  global $acted;
  global $directed;
  global $runtime;
  global $female_lead;
  global $male_lead;
  global $quote;
  global $image_location;

  if (isset($_GET["film"])) {
    $current_film = get_film_by_id($_GET["film"]);
    $film_name = htmlentities($current_film["film_name"]);
    $release_date = htmlentities($current_film["release_date"]);
    $genre = ucwords(($current_film["genre"]));
    $summary = htmlentities($current_film["summary"]);
    $wrote = htmlentities(binary_to_words($current_film["wrote"]));
    $acted = htmlentities(binary_to_words($current_film["acted"]));
    $directed = htmlentities(binary_to_words($current_film["directed"]));
    $runtime = htmlentities($current_film["runtime"]);
    $female_lead = htmlentities($current_film["female_lead"]);
    $male_lead = htmlentities($current_film["male_lead"]);
    $quote = htmlentities($current_film["quote"]);
    $image_location = htmlentities($current_film["image_location"]);
  }
  else {
    $random_film_id = generate_random_id();
    $new_address = "recommend.php?film=" . $random_film_id;
    redirect_to($new_address);
  }
}

/*
function get_movie_array_by_id($movie_id) {
  global $connection;

  $safe_id = mysqli_real_escape_string($connection, $movie_id);

  $query = "SELECT * ";
  $query .= "FROM woody_table ";
  $query .= "WHERE id = {$safe_id} ";
  $query .= "LIMIT 1";
  $movie_set = mysqli_query($connection, $query);
  confirm_query($movie_set);

  if ($movie = mysqli_fetch_assoc($movie_set)) {

  }
  else {
    return null;
  }
}
 */

function write_direct_act_text($wrote, $acted, $directed) {
  /*
    This one was a doozy! I wanted to take the binary values for $wrote, $acted, 
    and $directed and construct a logical, grammatically correct sentence around 
    them (that damn Oxford Comma proved to be a menace). 

    i.e. If Woody acted and directed the film, the function would return 
    "Starring and directed by Woody Allen." Similarly, if he wrote, directed, 
    and acted in the film, it would return "Written by, Directed by, and 
    starring Woody Allen"
  */


  $result = "";
  $bool_array = array($wrote, $acted, $directed);
  $bool_keys= array("written by", "starring", "directed by");
  $string_array = array();
  $grammar_array = array();

  $count = count($bool_array);

  for ($i = 0; $i<$count; ++$i) {
    if ($bool_array[$i] == "Yes") {
      array_push($string_array, $bool_keys[$i]);
    }
  }

  $count = count($string_array);

  if ($count == 2) {
    array_push($grammar_array, " and ");
    array_push($grammar_array, "");
    array_push($grammar_array, "");
  }
  else if ($count == 3) {
    array_push($grammar_array, ", ");
    array_push($grammar_array, ", and ");
    array_push($grammar_array, "");
  }
  else if ($count == 1) {
    array_push($grammar_array, "");
    array_push($grammar_array, "");
    array_push($grammar_array, "");
  }


  for ($i = 0; $i<$count; ++$i) {
    $value=$string_array[$i];
    if ($i == 0){
      $result .= ucwords($value[0]);
      $result .= substr($value, 1);
    }
    else {
      $result .= $value;
    }
    $result .= $grammar_array[$i];
  }
  $result .= " Woody Allen.";

  return $result;
  
}

function create_table_item($film_info_array, $number) {
  $result = "<tr class='clickable-row' data-href='recommend.php?film=";
  $result .= $number . "'>";
  foreach ( $film_info_array as $item) {
    $result .= "<td>";
    $result .= $item;
    $result .= "</td>";
  }
  $result .= "</tr>";
  return $result;
}

function show_filmography() {
  $result = "";
  foreach (range(1,55) as $number) {
    $film_info_array = find_selected_film_as_array($number);
    $result .= create_table_item($film_info_array, $number);
  }
  return $result;
}

function poster_html($image_location) {
  $final_html = "<img src='"; 
  $final_html .= $image_location;
  $final_html .= "' alt='film poster' />";
  return $final_html;
}


?>
