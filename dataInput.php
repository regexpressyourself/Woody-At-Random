<?php require_once("db_connection.php");  ?>
<?php include("functions.php");  ?>
<?php find_selected_film_2(); ?>

<?php  
if (isset($_POST['submit'])) {
  $summary = $_POST["summary"];
  $female_lead = $_POST["female_lead"];
  $male_lead = $_POST["male_lead"];
  $film_id = $_POST["id"];
  $quote = nl2br($_POST["quote"]);


  $query = "UPDATE `woody_table` SET ";
  $query .= "summary = '{$summary}', ";
  $query .= "female_lead = '{$female_lead}', ";
  $query .= "male_lead = '{$male_lead}',  ";
  $query .=  "quote = '{$quote}' ";
  $query .= "WHERE ";
  $query .= "id = {$film_id}";
  $result = mysqli_query($connection, $query);

  if ($result) {
    $nextpage = "dataInput.php?film=";
    $nextpage .= ($film_id + 1);

    redirect_to($nextpage);
  }
  else {
    $nextpage = "dataInput.php?film=";
    $nextpage .= ($film_id);
    redirect_to($nextpage);
  }


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
  <h2><?php echo $film_name; ?></h2>
  <h3><a href="https://www.google.com/search?q=<?php echo $film_name; ?>%3F+site:imdb.com&btnI">summary</a></h3>
  <h2><a href="dataInput.php?film=<?php echo $film_id + 1; ?>">NEXT FILM</a></h2>

  <form class="form-horizontal" action="dataInput.php" method="post" >

    <div class="form-inline">


      <div class="form-group">
        <label class="control-label" for="summary">Summary</label>
        <textarea class="form-control" rows="3" name="summary" id="summary" value="" ></textarea>

      </div>
    </div>
    <div class="form-inline">


      <div class="form-group">
        <label class="control-label" for="id">id</label>
        <input type="text" class="form-control" name="id" id="id" value="<?php echo $film_id; ?>"/>

      </div>
    </div>

    <div class="form-inline">

      <div class="form-group">
        <label class="control-label" for="female_lead">Female Lead</label>
        <input class="form-control" type="text" name="female_lead" id="female_lead" value="n/a" />

      </div>

      <div class="form-group">
        <label class="control-label" for="male_lead">Male Lead</label>
        <input class="form-control" type="text" name="male_lead" id="male_lead" value="n/a" />

      </div>
    </div>
    <div class="form-inline">

      <div class="form-group">
        <label class="control-label" for="quote">Quote</label>
        <pre>
          <textarea class="form-control" rows="3" name="quote" id="quote" value="" ></textarea>
        </pre>

      </div>
    </div>
    <br />
    <button type="submit" id="submit" name="submit" class="btn btn-default">Submit</button>
      


  </form>

</body>

</html>

