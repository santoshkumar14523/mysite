<?php 
	if(isset($_POST['logout-btn'])){
		session_start();
		setcookie("email", "", time()-3600, '/');
		setcookie('pswd', '', time()-3600, '/');
		session_unset();
		session_destroy();
		echo 'hello';
		header("Location: ../home.php");
	}
 ?>