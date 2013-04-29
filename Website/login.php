<!-- Kom ihåg att logga in till databasen först! -->
<?php
        include '../Website/connect.php';
		session_start();
         $query = "SELECT * FROM `user` WHERE `name`=\"$_POST[myUser]\" and `password`=\"$_POST[myPassword]\"";
         
         $result = mysql_query($query);
		 
		 session_unset();
         
		 if (mysql_numrows($result) == 1) {
		      $_SESSION['session_user']=$_POST[myUser];
			  header('Location: index.html');
		 }
		 else {
			  header('Location: login.html');
		 }
		
?>