<?PHP
include '../Website/connect.php';
$reggtry = "SELECT * FROM `user` WHERE `name`=\"$_POST[myUser]\"";

$test = mysql_query($reggtry);
$num_rows1 = mysql_num_rows($test);

if ($num_rows1>0){
echo ("Detta användarnamn finns redan, var vänlig välj ett bättre!");
}
else{
$password = md5($_POST['myPassword']);
$query = "INSERT INTO `minwebsite`.`user` (`id`, `name`, `password`) VALUES (NULL, \"$_POST[myUser]\", \"$password\");";
echo $query;
$resylt = mysql_query($query);
if ($resylt === false) {
echo 'Something went aa';
}
else{
mysql_close($link);
header('Location: index.html');

}
}
?>