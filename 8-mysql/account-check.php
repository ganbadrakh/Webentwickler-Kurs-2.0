<?php

session_start();

if(array_key_exists('email', $_POST) OR array_key_exists('password', $_POST)) {

$link = mysqli_connect("localhost", "root", "", "test_db");

if(mysqli_connect_error()) {
    die("Es gab Fehler beim Verbinden zur Datenbank!");
}

if($_POST['email'] == '') {
    echo "<p>Emailadresse muss eingetragen werden</p>";
} else if ($_POST['password'] == '') {
    echo "<p>Passwort muss eingetragen werden</p>";
} else {
    $query = "SELECT `id` FROM `users` WHERE email = '".mysqli_real_escape_string($link,$_POST['email'])."'";

    $result = mysqli_query($link, $query);

    if(mysqli_num_rows($result) > 0) {
        echo "<p>Diese Email ist bereits registriert</p>";
    } else {
        $query = "INSERT INTO `users` (`email`, `password`) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."','".mysqli_real_escape_string($link, $_POST['password'])."')";

        if(mysqli_query($link, $query)) {

            $_SESSION['email'] = $_POST['email'];

            header("Location: session.php");

           // echo "<p>Du hast dich erfolgreich registriert</p>";
        } else {
            echo "<p>Registrierung fehlgeschlagen. Versuch es später noch einmal</p>";
        }
    }
}

}

?>

<form method="post">
    <input name="email" type="text" placeholder="Emailadresse">
    <input name="password" type="password" placeholder="Passwort">
    <input type="submit" value="Sign up">

</form>
