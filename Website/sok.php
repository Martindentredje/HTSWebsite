<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
		
		<?php
session_start();
if(!isset($_SESSION['session_user'])){
	header('Location: login.php');
}
?>
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
				<h1 class="dokument-item-header"> Sök efter en person</h1>
				
<form action="search.php" method="post">
Namn: <input type="text" name="search"> <br />

<input type="submit" Value="Sök">
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