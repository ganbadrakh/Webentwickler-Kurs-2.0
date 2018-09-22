<?php

$link = mysqli_connect("localhost", "root", "", "test_db");

if(mysqli_connect_error()) {
    die("Es gab Fehler beim Verbinden zur Datenbank!");
}

$query = "INSERT INTO `users` (`email`, `password`, `name`) VALUES ('hans@gmail.com', '123android', 'Hans')";

$query = "UPDATE `users` SET email = 'bloed@gmail.com' WHERE id = 1 LIMIT 1";

mysqli_query($link, $query);

//$query = "SELECT * FROM users WHERE email LIKE '%oe'";

//$name = "francis d' Dritte";
//$query = "SELECT * FROM users WHERE name = '".mysqli_real_escape_string($link,$name)."'";

$query = "SELECT * FROM users";

if($result = mysqli_query($link, $query)) {
    $row = mysqli_fetch_array($result);
    //print_r($row);
    echo "Deine Emailadresse ist ".$row[1]." und dein Passwort ist ".$row["password"].".";
}

?>
