
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Weather App</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
  </head>

  <body style="background-color: green">
    <div class="container">
    
      <a class="navbar-brand" href="#" style="font-family: cursive;color: yellow">Weather app</a>
      

    
        <div class="jumbotron">
          <h1>search your city weather</h1>
          <form class="form-horizontal" method="get" action="get.php">
            <div class="form-group">
                <label class="col-sm-2 control-label" for="inlineFormInputName2">City</label>
                <div class="col-sm-10">
                <input type="text" class="form-control mb-2 mr-sm-2" autocomplete="off" required="" name="city" placeholder="Write your City">
                </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label" for="inlineFormInputGroupUsername2">Country</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" autocomplete="off" required="" name="country" placeholder="Write your country">
              </div>
              </div>
              <br>
            <div class="form-group">             
              <div class="col-sm-offset-z col-sm-10">
              <button type="submit" class="btn btn-primary btn-block">Submit</button>
              </div>
        </form>
        </div>
      
</div>
      
    <footer class="container">
      <p>&copy; created by safayet developer</p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
