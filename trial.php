<?php require_once("db_connection.php"); ?>
<?php include("functions.php"); ?>
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


        <div class="inner cover">
          <h1 class="cover-heading">Welcome to <br />Woody at Random</h1>
          <br />
          <p class="lead">So, you want to check out a Woody Allen film, but don't know where to start? </p>
          <p class="lead">Let me recommend one at random for you!</p>
          <p class="lead">
            <a href="recommend.php" class="btn btn-lg btn-default">Recommend Me Some Woody!</a>
          </p>
          <p id="details">these are the details</p>
          <p id="poster">this is the poster</p>
          <button type="button" onclick="showDetails()"value="click me">cloick me</button>
        </div>


      </div>

    </div>

  </div>

  <script type="text/javascript" charset="utf-8">
    function showDetails() {
      var detail = window.document.getElementById("details");
      var poster = window.document.getElementById("poster");
      if (detail.style.display != "none") {
        detail.style.display = "none";
        poster.style.display = "block";
        poster.className = "col-md-6";
        detail.className = "";
      }
      else {
        detail.style.display = "block";
        poster.style.display = "none";
        detail.className = "col-md-6";
        poster.className = "";
      }
      return;
    }


  </script>




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
