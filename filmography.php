<?php require_once("db_connection.php"); ?>
<?php include("functions.php"); ?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
          <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
          <title>Woody Allen Filmography</title>

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
            <h1 >Woody Allen Filmography</h1>
          </div>
          <div class="clearfix">
            
          </div>
          <br />
            <div class="row">
              <table class="table">
                <tr>
                  <th>Number</th>
                  <th>Title</th>
                  <th>Release Year</th>
                  <th>Genre</th>
                  <th>Wrote?</th>
                  <th>Acted?</th>
                  <th>Directed?</th>
                  <th>Runtime</th>
                </tr>
                <?php echo show_filmography(); ?>
              </table>

            </div>


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
