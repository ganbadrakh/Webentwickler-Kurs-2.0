<p><strong>Primzahlchecker via GET-Methode</strong></p>
<br>
<p>Trage bitte einen ganzzahligen Wert ein!</p>

<form>
    <input name="nummer" type="text">
    <input type="submit" value="Checken!">
</form>

<?php

if(isInteger($_GET['nummer']) && $_GET['nummer'] > 0) {
    if(isPrime($_GET['nummer'])) {
        echo "<p>".$_GET['nummer']." ist eine Primzahl.</p>";
    } else {
        echo "<p>".$_GET['nummer']." ist keine Primzahl.</p>";
    }
} else {
    echo "<p>Bitte trage eine korrekte Zahl ein!</p>";
}

function isInteger($input){
    return(ctype_digit(strval($input)));
}

function isPrime($primeTest) {
    $maxtest = sqrt($primeTest);
    for ($i = 2; $i <= $maxtest; ++$i) {
        if($primeTest % $i == 0) {
            return false;
        }
    }
    return true;
}

?>

