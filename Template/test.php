<?php
$server="localhost";
$user="root";
$password="";
$database="test";

$con = mysql_connect($server, $user, $password);
if(!$con) {
	die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully to database server';
mysql_select_db($database);
$query = mysql_query("SELECT namn FROM test");
while ($temp = mysql_fetch-array($query)) {
	echo $temp["namn"];
}
	mysql_close($con);
?>