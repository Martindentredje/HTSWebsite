<?PHP
include '../Website/connect.php';



$search = mysql_real_escape_string($_POST['search']);


$query = "SELECT * FROM `minwebsite`.`persons` WHERE name=;
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