<?php

session_start();

//$_SESSION['username'] = "ganaa";
//echo $_SESSION['username'];

if($_SESSION['email']) {
    echo "Du bist eingeloggt";
} else {
    header("Location: account-check.php");
}
?>
