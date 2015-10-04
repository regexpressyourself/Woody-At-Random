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
    $genre = htmlentities($current_film["genre"]);
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



?>
