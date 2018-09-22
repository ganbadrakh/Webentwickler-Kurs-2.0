<?php

error_reporting(E_ALL);

$error = "";
$weather = "";

if(isset($_GET['stadt'])) {

  $_GET['stadt'] = str_replace(' ','',$_GET['stadt']);

  function url_check($url) {
    $hdrs = @get_headers($url);
    return is_array($hdrs) ? preg_match('/^HTTP\\/\\d+\\.\\d+\\s+2\\d\\d\\s+.*$/',$hdrs[0]) : false;
  };

  if(url_check("https://de.weather-forecast.com/locations/".$_GET['stadt']."/forecasts/latest")){

    $forecastPage = file_get_contents("https://de.weather-forecast.com/locations/".$_GET['stadt']."/forecasts/latest");

      $pageArray = explode('3 Tage Wettervorhersage Zusammenfassung:</b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">', $forecastPage);

      $secondPageArray = explode('</span></span></span></p><div class="forecast-cont"><div class="units-cont">', $pageArray[1]);

      $weather = $secondPageArray[0];
  } else {
      $error = "Die Stadt konnte nicht gefunden werden.";
    }
}

?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Wettervorhersage-App</title>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js">
    </script>

    <!-- Bootstrap -->
    <!-- Das neueste kompilierte und minimierte CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optionales Theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!-- Das neueste kompilierte und minimierte JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <style type="text/css">
        html {
            background: url(bg.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        body {
            background: none;
        }

        .container {
            text-align: center;
            margin-top: 200px;
            width: 450px;
        }

        #wetter {
            margin-top: 20px;
        }

    </style>

</head>

<body>
    <div class="container">

        <h1>Wie ist das Wetter?</h1>

        <form>
            <div class="form-group">
                <label for="stadt">Trage den Namen einer Stadt ein!</label>
                <input type="stadt" class="form-control" name="stadt" id="stadt" placeholder="z.B. Wien, Berlin etc.">
            </div>

            <button type="submit" class="btn btn-primary">Wetter Vorhersagen</button>
        </form>

        <div id="wetter">
            <?php
        if(isset($weather)) {

          echo '<div class="alert alert-success" role="alert">'.$weather.'</div>';
        } else if (isset($error)){
            echo '<div class="alert alert-danger" role="alert>'.$error.'</div>';
        }
      ?>
        </div>

    </div>

</body>

</html>
