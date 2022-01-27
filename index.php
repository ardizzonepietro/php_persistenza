<?php
echo "
<h1>salvo il cookie</h1>";
$name="1"; //esenziale
$value="ciao mondo"; //esenziale
$expire=8600;
$path="/";
$domain="";
$secure="";
$httpOnly= true;
setcookie($name,$value, time()+$expire,$path, $domain, $secure,$httpOnly);
?>