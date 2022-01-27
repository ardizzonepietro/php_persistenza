<?php
echo "
<h1 align = center>accesso cookie</h1>
<form method=post action=index.php align=center>
<input type=text name=login id=login required></br>
<input type=password name=pw id=pw required></br>
<input type=submit value = invia>
</form>
";
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
}
?>