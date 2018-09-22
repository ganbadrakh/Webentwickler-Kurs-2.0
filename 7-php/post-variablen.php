<p><strong>Namenchecker via POST-Methode</strong></p>

<br>
<p>Wie heisst du?</p>

<form method="post">
    <input name="name" type="text">
    <input type="submit" value="Submit">
</form>

<?php

if($_POST) {
    $namen = array("Ganaa", "Akin", "Marinel", "Gojko");
    $istBekannt = false;

    foreach($namen as $value) {
        if($value == $_POST['name']) {
            $istBekannt = true;
        }
    }
    //aquivalent zu if($istBekannt == true)
    if($istBekannt) {
        echo "Hi ".$_POST['name']."!";
    } else {
        echo "Ich kenne dich nicht!";
    }
}

?>