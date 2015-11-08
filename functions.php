<?php  
function confirm_query($result_set) {
  if (!$result_set) {
    die("Database query failed.");
  }
}

function mysql_prep($string) {
    global $connection;

    $escaped_string = mysqli_real_escape_string($connection, $string);
    return $escaped_string;
}

function find_selected_film_2($id){
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
  $genre = ($current_film["genre"]);
  $summary = htmlentities($current_film["summary"]);
  $wrote = htmlentities(binary_to_words($current_film["wrote"]));
  $acted = htmlentities(binary_to_words($current_film["acted"]));
  $directed = htmlentities(binary_to_words($current_film["directed"]));
  $runtime = htmlentities($current_film["runtime"]);
  $female_lead = htmlentities($current_film["female_lead"]);
  $male_lead = htmlentities($current_film["male_lead"]);
  $quote = htmlentities($current_film["quote"]);
  $image_location = htmlentities($current_film["image_location"]);
  return array(  $current_film,  $film_name,  $release_date,  $genre,  $summary,  $wrote,  $acted,  $directed,  $runtime,  $female_lead,  $male_lead,  $quote,  $image_location,  $film_id);
}  

function find_selected_film() {
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
    $genre = ($current_film["genre"]);
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

function get_film_by_id($movie_id) {
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

function binary_to_words($binary_num) {
  if ($binary_num != 0) {
    return "Yes";
  }
  else {
    return "No";
  }
}

function redirect_to($new_location) {
  header("Location: " . $new_location);
  exit;
}

function generate_random_id() {
  global $connection;

  $query = "SELECT * ";
  $query .= "FROM woody_table";
  $result = mysqli_query($connection, $query);
  confirm_query($result);
  $num_rows = mysqli_num_rows($result);
  $random_number = rand(1, $num_rows);
  return $random_number;
}

function write_direct_act_text($wrote, $acted, $directed) {
  $result = "";
  //$bool_array = array($wrote => "written by", $acted => "starring", $directed => "directed by");
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

  for ($i = 0; $i<$count; ++$i) {
  }
  
  if ($count == 2) {
    array_push($grammar_array, " and ");
  }
  else if ($count == 3) {
    array_push($grammar_array, " , ");
    array_push($grammar_array, ", and ");
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

function show_filmography() {
  $result = "";
  foreach (range(1,55) as $number) {
    find_selected_film_2($number);
    $result .= $film_name;
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
