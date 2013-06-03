<?php
$server="localhost";
$user="root";
$password="";
$database="minwebsite";

// Database Connection String
$con = mysql_connect($server, $user, $password);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db($database, $con);
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sv" lang="sv">    
    <head>
        <meta http-equiv="Content-Type" content="text/html charset=utf-8" />
        <link rel="stylesheet" title="magnum" type="text/css" href="martin.css" />
		<link rel="alternate stylesheet" title="none" type="text/css" href="../CSS/empty.css.css" />	  
        <title>Hej!</title>	
    </head>
    <body>
        <div id="content">
            <div id="top">
               <div id="banner" ></div>
            </div>
            <div id="left">
					<div class="dokument-item">
						Vänster kolumn!
					</div>
            </div>
            <div id="center">
                <div id="info">
				<a href="http://127.0.0.1/HTSWebsite/Website/logout.php"> <img src="logout.jpg" border=0></a>
				<a href="http://127.0.0.1/HTSWebsite/Website/logoutreg.php"> <img src="register.jpg" border=0></a>
				<a href="http://127.0.0.1/HTSWebsite/Website/laggtill.php"> <img src="add.jpg" border=0></a>
				<a href="http://127.0.0.1/HTSWebsite/Website/sok.php"> <img src="search.jpg" border=0></a>
				<h1 class="dokument-item-header"> Resultat</h1>
				
<?php

if (!empty($_REQUEST['search'])) {
	
	$search = mysql_real_escape_string($_REQUEST['search']);     

$sql = "SELECT * FROM persons WHERE namn LIKE '%".$search."%'"; 
$r_query = mysql_query($sql); 

while ($row = mysql_fetch_array($r_query)){  
echo 'Name: ' .$row['namn'];
echo '<br /> Ålder: ' .$row['alder'];
echo '<br /> Bostadsort: '.$row['bostad'];
echo '<br /> Intresse: '.$row['intresse'];

}
}
?>


				<p class="info"></p>
</div>
</div>
            <div id="right">

				<p class="info"></p>
            </div>

			<div id="footer">
				<p> &copy; 2013 Martin Brkic# 
				</p>
			</div>
        </div>
    </body>
</html>


    </body>
</html>