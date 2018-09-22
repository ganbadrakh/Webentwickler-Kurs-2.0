<?php

//einfache Variante
//$salt = "4rtFjuf87g$";
//echo md5($salt."password");

//bessere Variante
$row['id'] = 73;
echo md5(md5($row['id'])."password");

?>
