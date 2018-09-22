<?php

error_reporting(E_ALL);

$error = "";
$weather = "";

if($_GET['stadt']) {

    $urlContents = file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=".urlencode($_GET['stadt']).",AT&appid=a505196bc2feae8cc7de035269be0cd2");

    $weatherArray = json_decode($urlContents, true);

    if($weatherArray['cod'] == 200) {
        
        $weather = "Das Wetter in ".$_GET['stadt']." ist momentan '".$weatherArray['weather'][0]['description']."'.";

        $tempCelsius = round($weatherArray['main']['temp'] - 273);

        $weather .= " Die Temperatur ist ".$tempCelsius."&deg;C und die Windgeschwindigkeit beträgt ".$weatherArray['wind']['speed']."m/s.";

    } else {

        $error = "Stadt konnte nicht gefunden werden.";
    }  
}

?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Wettervorhersage via API</title>

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
                <label for="stadt">Trage den Namen einer Stadt in Österreich ein!</label>
                <input type="stadt" class="form-control" name="stadt" id="stadt" placeholder="z.B. Wien, Graz, Salzburg etc.">
            </div>

            <button type="submit" class="btn btn-primary">Wetter Vorhersagen</button>
        </form>

        <div id="wetter">

            <?php

                if($weather) {

                echo '<div class="alert alert-success" role="alert">'.$weather.'</div>';

                } else if ($error){

                    echo '<div class="alert alert-danger" role="alert>'.$error.'</div>';
                }
            ?>

        </div>

    </div>

</body>

</html>
