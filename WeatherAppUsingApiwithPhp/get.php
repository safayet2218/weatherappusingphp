<?php
  error_reporting(0);
  $get =json_decode(file_get_contents('http://ip-api.com/json/'),true);

  date_default_timezone_set($get['timezone']);
  $city =$_GET['city'];
  $country=$_GET['country'];

  $string= "http://api.openweathermap.org/data/2.5/weather?q=".$city.",".$country."&units=metric&appid=6af0d999093d06b92c1144519ff96db8";
  $data=json_decode(file_get_contents($string),true);

  $temp=$data['main']['temp'];
  $icon=$data['weather'][0]['icon'];
  $visibility=$data['visibility'];
  $visibilitykm=$visibility/1000;
  $logo="<center><img src='http://openweathermap.org/img/w/".$icon."png'></center>";
  $desc="<b>Description:<p>".$data['weather'][0]['description']."</p></b>";
  $temperature= "<b>Temparature:".$temp."*C</b></br>";
  $clouds="<b>Clouds:".$data['clouds']['all']."%</b></br>";
  $humidity= "<b>Humidity:".$data['main']['humidity']."%</b></br>";
  $windspeed="<b>Wind Speed:".$data['wind']['speed']."m/s</b></br>";
  $pressure="<b>Pressure: ".$data['main']['pressure']."hpa</b></br>";
  $visibility="<b>Visibility: ".$visibilitykm."</b></br>";
  $sunrise="<b>Sunrise: ".date('h:i A',$data['sys']['sunrise'])."</b></br>";
  $sunset="<b>Sunset: ".date('h:i A',$data['sys']['sunset'])."</b></br>";

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Weather App <?php echo $_GET['city']; ?></title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
  </head>

  <body >
    <div class="container bg-primary">
        <a class="navbar-brand" href="#" style="font-family: cursive;color: yellow">Weather app</a>
      <table class="table table-bordered">
        <tr>
          <td>Temparature:</td>
          <td><?php echo $logo; ?> <?php echo $temperature; ?>  </td>
        </tr>
        <tr>
          <td>Description:</td>
          <td><?php echo $desc;?></td>
        </tr>
        <tr>
          <td>Clouds:</td>
          <td><?php echo $clouds;?> </td>
        </tr>
        <tr>
          <td>Humidity:</td>
          <td><?php echo $humidity;?></td>
        </tr>
        <tr>
          <td>Wind Speed:</td>
          <td><?php echo $windspeed;?></td>
        </tr>
        <tr>
          <td>Pressure:</td>
          <td><?php echo $pressure;?></td>
        </tr>
        <tr>
          <td>Visibility:</td>
          <td><?php echo $visibility;?></td>
        </tr>
        <tr>
          <td>Sunrise:</td>
          <td><?php echo $sunrise;?></td>
        </tr>
        <tr>
          <td>Sunset:</td>
          <td><?php echo $sunset;?></td>
        </tr>

      </table>
    
      
      

    
        
    <footer class="container ">
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
