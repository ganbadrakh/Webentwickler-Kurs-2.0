<?php

//for-Schleife
for($i = 0; $i < 10; $i++) {
    echo $i."<br>";
}

$freunde = array("Akin", "Marinel", "Tobias", "Gojko");

for($i = 0; $i < sizeof($freunde); $i++) {
    echo $freunde[$i]."<br>";
}

//foreach-Schleife
foreach($freunde as $key => $value) {
    $freunde[$key] = $value." Kumpel";

    echo "Array Element ".$key." ist ".$value."<br>";
}

echo "<br><br>";

//while-Schleife
$sprache = array("Java", "PHP", "Python", "JavaScript");

$i = 1;

while ($i < sizeof($sprache)) {
    
    for($k = 0; $k < sizeof($sprache); $k++) {
        $j = $i * 5;
        echo "Wichtigkeit der Sprache ".$sprache[$k]. " ist ".$j."<br>";
        $i++;
    }   
}

//email senden
$emailTo = "nekyl@gmail.com";
$subject = "ich hoffe das funktioniert.";
$body = "PHP ist scheiße";
$headers = "From: nekyls@gmail.com";

if(mail($emailTo, $subject, $body, $headers)){
    echo "Die Email wurde erfolgreich versandt.";
} else {
    echo "Die Email konnte nicht versendet werden.";
}

?>