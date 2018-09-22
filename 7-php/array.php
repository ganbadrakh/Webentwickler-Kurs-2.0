<?php
$name = "Ganaa";
echo "<p>Mein Name ist $name </p>";

$string1 = "<p>Dies ist der erste Teil";
$string2 = "des Satzes</p>";

echo $string1." ".$string2;

$meineZahl = 45;

$rechnung = $meineZahl + 15 /12 + 6;

echo "Das Ergebnis der Rechung ist ".$rechnung;

$meinBool = true;

echo "<p>ist die Aussage wahr? ".$meinBool."</p>";

$variablenName = "name";

echo $$variablenName;
echo "<br><br>";
echo $name;
echo "<br><br>";

$myArray = array("Ganaa", "Lukas", "Sarah", "Mary");
print_r($myArray);
echo "<br><br>";
echo $myArray[0];

echo "<br><br>";

$andereArray[0] = "Pizza";

$andereArray[1] = "Kaffee";

$andereArray["lieblingsessen"] = "Sushi";

print_r($andereArray);
echo "<br><br>";

echo $andereArray["lieblingsessen"];
echo "<br><br>";

$dritterArray = array("Frankreich" => "Französisch", "USA" => "Englisch", "Deutschland" => "Deutsch");

unset($dritterArray["Frankreich"]);

print_r($dritterArray);

echo sizeof($dritterArray);
echo "<br><br>";

//if-else
$user = "ganaa";

if($user == "ganaa") {
    echo "Hallo Ganaa";
} else {
    echo "Ich kenne dich nicht";
}

echo "<br><br>";

$age = 19;

if($age >= 18 && $user == "ganaa") {
    echo "Du darfst rein";
} else {
    echo "Du bist zu jung!";
}

?>