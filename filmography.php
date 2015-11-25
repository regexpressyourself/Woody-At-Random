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
          <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
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
                <div id="refine-button" onclick="showForm()" class="btn btn-lg btn-default card__text">Refine Search</div>
              <div style="display: none;"id="film-form">
                <form class="form-control" action="refine-search.php" method="post">
                  <div class="form-group">
                    <label for="genre">Genre</label>
                    <select name="genre" id="genre">
                      <option>Any</option>
                      <option>Comedy</option>
                      <option>Adventure</option>
                      <option>Crime</option>
                      <option>Romance</option>
                      <option>Scifi</option>
                      <option>War</option>
                      <option>Drama</option>
                      <option>Fantasy</option>
                      <option>Mystery</option>
                      <option>Music</option>
                      <option>Thriller</option>
                    </select>
                  </div>
                  <br />
                  <label for="written">Written by Allen?</label>
                  <select name="written" id="written">
                    <option>Either</option>
                    <option>Yes</option>
                    <option>No</option>
                  </select>
                  <br />
                  <label for="directed">Directed by Allen?</label>
                  <select name="directed" id="directed">
                    <option>Either</option>
                    <option>Yes</option>
                    <option>No</option>
                  </select>
                  <br />
                  <label for="acted">Starring Allen?</label>
                  <select name="acted" id="acted">
                    <option>Either</option>
                    <option>Yes</option>
                    <option>No</option>
                  </select>
                  
                </form>

            </div>
        
          <br />
            <div class="row">
              <div class="table-responsive">
                <table class="table table-hover">
                  <tr>
                    <th>Number</th>
                    <th>Title</th>
                    <th>Release Year</th>
                    <th>Genre</th>
                    <th>Wrote?</th>
                    <th>Acted?</th>
                    <th>Directed?</th>
                    <th>Runtime<br />(Minutes)</th>
                  </tr>
                  <?php echo show_filmography(); ?>
                </table>
              </div>

            </div>


      </div>

    </div>

  </div>



  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="custom.js"></script>
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="https://cdn.rawgit.com/nnattawat/flip/v1.0.16/dist/jquery.flip.min.js"></script>
</body>

</html>
