<?php require_once("db_connection.php");  ?>
<?php include("functions.php");  ?>

<?php  
if (isset($_POST['submit'])) {
  $film_name = $_POST["film_name"];
  $release_date = $_POST["release_date"];
  $genre = $_POST["genre"];
  $summary = $_POST["summary"];
  $wrote = isset($_POST["wrote"]) ? $_POST["wrote"] : '';
  $acted = isset($_POST["acted"]) ? $_POST["acted"] : '';
  $directed = isset($_POST["directed"]) ? $_POST["directed"] : '';
  $runtime = (int) $_POST["runtime"];
  $female_lead = $_POST["female_lead"];
  $male_lead = $_POST["male_lead"];
  $quote = $_POST["quote"];
  $image_location = $_POST["image_location"];

  $acted ? $acted = (int) 1 : $acted = (int) 0;
  $wrote ? $wrote = (int) 1 : $wrote = (int) 0;
  $directed ? $directed = (int) 1 : $directed = (int) 0;
}
?>



<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
          <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
          <title>Add Films</title>

          <!-- Bootstrap -->
          <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <link href="custom.css" rel="stylesheet">


              <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
                            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
                                                        <!--[if lt IE 9]>
                                                        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                                                          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                                                            <![endif]-->
</head>

<body>
  <h1>Let's Input Some Data!</h1>

  <form class="form-horizontal" action="dataInput.php" method="post" >

    <div class="form-inline">

      <div class="form-group">
        <label class="control-label" for="film_name">Film Name</label>
        <input class="form-control" type="text" name="film_name" id="film_name" value="" />
      </div>

      <div class="form-group">
        <label class="control-label" for="release_date">Release Date</label>
        <input class="form-control" type="text" name="release_date" id="release_date" value="" />

      </div>

    </div>
    <div class="form-inline">
      <div class="form-group">
        <label class="control-label" for="genre">Genre</label>
        <input class="form-control" type="text" name="genre" id="genre" value="" />

      </div>

      <div class="form-group">
        <label class="control-label" for="summary">Summary</label>
        <textarea class="form-control" rows="3" name="summary" id="summary" value="" ></textarea>

      </div>
    </div>
    <div class="form-inline">

      <div class="checkbox">
        <label for="wrote">
          <input type="checkbox" name="wrote" id="wrote"/> Wrote?
        </label>
      </div>

      <div class="checkbox">
        <label for="acted">
          <input type="checkbox" name="acted" id="acted"/> Acted?
        </label>
      </div>

      <div class="checkbox">
        <label for="directed">
          <input type="checkbox" name="directed" id="directed"/> Directed?
        </label>
      </div>

    </div>
    <div class="form-inline">
      <div class="form-group">
        <label class="control-label" for="runtime">Runtime</label>
        <input class="form-control" type="text" name="runtime" id="runtime" value="" />

      </div>
      <div class="form-group">
        <label class="control-label" for="image_location">Image Location</label>
        <input class="form-control" type="text" name="image_location" id="image_location" value="img/" />

      </div>
    </div>
    <div class="form-inline">

      <div class="form-group">
        <label class="control-label" for="female_lead">Female Lead</label>
        <input class="form-control" type="text" name="female_lead" id="female_lead" value="" />

      </div>

      <div class="form-group">
        <label class="control-label" for="male_lead">Male Lead</label>
        <input class="form-control" type="text" name="male_lead" id="male_lead" value="" />

      </div>
    </div>
    <div class="form-inline">

      <div class="form-group">
        <label class="control-label" for="quote">Quote</label>
        <textarea class="form-control" rows="3" name="quote" id="quote" value="" ></textarea>

      </div>
    </div>
    <br />
    <button type="submit" id="submit" name="submit" class="btn btn-default">Submit</button>
      


  </form>

</body>

</html>

