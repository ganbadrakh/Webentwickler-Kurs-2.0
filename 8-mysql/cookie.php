<?php

//setcookie("customerId", "", time() -60 * 60);

//setcookie("customerId", "0001", time() + 60 * 60 *24);

setcookie("customerId", "", time() + 60 * 60);

$_COOKIE["customerId"] = "test";

echo $_COOKIE["customerId"];


?>
