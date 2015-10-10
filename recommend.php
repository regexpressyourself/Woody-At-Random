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

        <div >
          <div id="film_name">
            <h1 ><?php echo $film_name; ?></h1>
            <p><?php echo $release_date; ?></p>
          </div>
          <br />
          <p class="col-md-3">
            <?php echo $male_lead;?> 
            <br />&amp;<br />
            <?php echo $female_lead; ?>
          </p>
          <?php 
            $image = poster_html($image_location);
            $details = details_html($wrote, $acted, $directed, $runtime, $genre);
            $output_html = "<div ";
            $output_html .= "class='col-md-6' ";
            $output_html .= "id='details_and_poster' ";
            $output_html .= "onclick='return ";
            $output_html .= "showDetails(";
            $output_html .= $image . ", " . $details;
            $output_html .= ")'";
            $output_html .= "></div>";
            echo $output_html;
           ?>
          <div id="details_and_poster" class="col-md-6">
          <img src="<?php echo $image_location; ?>" alt="film poster" width="300"/>
          </div>
          <p class="col-md-3"><?php echo $summary; ?></p>
          <p class="col-md-12"><?php echo $quote;  ?></p>
          <br />

          <?php  
            echo details_html($wrote, $acted, $directed, $runtime, $genre);
          ?>

          <p class="col-md-6"><?php echo $runtime; ?></p>
          <p class="col-md-6"><?php echo $genre; ?></p>
        </div>


      </div>

    </div>

  </div>



  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="custom.js"></script>
</body>

</html>
