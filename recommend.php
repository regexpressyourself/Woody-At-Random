<?php require_once("db_connection.php"); ?>
<?php include("functions.php"); ?>
<?php find_selected_film(); ?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
          <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
          <title>Recommend Me Some Woody!</title>

          <!-- Bootstrap -->
          <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <link href="custom.css" rel="stylesheet">
            <link href="flip.css" rel="stylesheet">

              <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
                            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
                                                        <!--[if lt IE 9]>
                                                        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                                                          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                                                            <![endif]-->
</head>

<body>

  <div class="site-wrapper">

    <div class="site-wrapper-inner">

      <div class="cover-container">
        

        <div class="masthead clearfix">
          <div class="inner">
            <a href="index.php"><h3 class="masthead-brand">Woody At Random</h3></a>
            <nav>
              <ul class="nav masthead-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="recommend.php">Random Recommendation</a></li>
                <li><a href="filmography.php">Filmography</a></li>
              </ul>
            </nav>
          </div>
        </div>

          <div id="film_name">
            <h1 ><?php echo $film_name; ?></h1>
            <p><?php echo $release_date; ?></p>
          </div>
          <div class="clearfix">
            
          </div>
          <br />
          <div class="row">
              <div class="col-md-3 img-thumbnail leads-feature">
                <h2 id="feature-heading">Starring:</h2>
                <p id="leads-text">
                  <?php echo $male_lead;?> 
                  <br />&amp;<br />
                  <?php echo $female_lead; ?>
                </p>
            </div>



            <div class="card effect__click">
              <div class="card__front">
                <img id="poster"  style="display:;" src="img/<?php echo $image_location; ?>" alt="film poster" class="col-md-6 card__text" width="300"/>
              </div>
              <div class="card__back">
                <div style="display:none;" id="details" class="card__text">
                  <?php  
                  echo details_html($wrote, $acted, $directed, $runtime, $genre);
?>
                </div>
              </div>
            </div>

            <div class="col-md-3 img-thumbnail summary-feature">
              <h2 id="feature-heading">Summary:</h2>
              <p id="starring-text"><?php echo $summary; ?></p>
            </div>
          </div>
          <p class="col-md-12"><?php echo nl2br($quote);  ?></p>
          <br />


          <p class="col-md-6"><?php echo $runtime; ?></p>
          <p class="col-md-6"><?php echo $genre; ?></p>


      </div>

    </div>

  </div>



  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="custom.js"></script>
  <script src="https://code.jquery.com/jquery-2.1.4.min.js">
  <script src="https://cdn.rawgit.com/nnattawat/flip/v1.0.16/dist/jquery.flip.min.js">
</body>

</html>
