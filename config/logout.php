<?php 
	if(isset($_POST['logout-btn'])){
		session_start();
		session_unset();
		session_destroy();
		header("Location: ../home.php");
	}
 ?>