<?php
if(!empty($_POST["login"])){

$name= "login"; //esenziale
$value=$_POST['login']; //esenziale
$expire=8600;
$path="/";
$domain="";
$secure="";
$httpOnly= true;
setcookie($name,$value, time()+$expire,$path, $domain, $secure,$httpOnly);
$name= "pw"; //esenziale
$value=$_POST['pw']; //esenziale
$expire=8600;
$path="/";
$domain="";
$secure="";
$httpOnly= true;
setcookie($name,$value, time()+$expire,$path, $domain, $secure,$httpOnly);
echo "<h1 align = center>cookie salvati!</h1>";
}
?>