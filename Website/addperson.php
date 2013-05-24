<?PHP
include '../Website/connect.php';



$namn = mysql_real_escape_string($_POST['namn']);
$alder = mysql_real_escape_string($_POST['alder']);
$bostad = mysql_real_escape_string($_POST['bostad']);
$intresse = mysql_real_escape_string($_POST['intresse']);

$query = "INSERT INTO `minwebsite`.`persons` (`id`, `namn`, `alder`,`bostad`,`intresse`) VALUES (NULL, \"$namn\", \"$alder\",\"$bostad\",\"$intresse\");";
echo $query;
$resylt = mysql_query($query);
if ($resylt === false) {
echo 'Something went aa';
}
else{
mysql_close($link);
header('Location: sidan.php');

}

?>