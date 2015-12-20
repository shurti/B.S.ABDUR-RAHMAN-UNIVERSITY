<!DOCTYPE HTML>
<html>
<head>
<title>Alloy Jacket Website | Home </title>
</head>
<body>
<?php
$nm=$_GET["name"];
$cardno=$_GET["password"];
mysql_connect("localhost","root","");
mysql_select_db("hospital");
mysql_query("insert into welcome values('$nm','$cardno')");

?>
</body>
</html>
