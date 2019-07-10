<?php 
 	if(isset($_POST['signin-btn'])){
 		// including database connection
 		include_once "conn.php";

 		// Recieving Users Input
 		$username = mysqli_real_escape_string($conn,$_POST['username']);
 		$email = mysqli_real_escape_string($conn,$_POST['email']);
 		$pswd = mysqli_real_escape_string($conn,$_POST['pswd']);

 		// error handlers
 		if(!preg_match("/^[a-zA-Z]*$/", $username)){
 			header("Location: ../home.php");
 			exit();
 		}
 		else{
 			// checking the validity of email
 			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
 				header("Location: ../home.php");
 				exit();
 			}
 			else{
 				// checking if the username already exists
 				$userCheck = "SELECT * FROM users WHERE username = '$username'";
 				$userCheckResult = mysqli_query($conn, $userCheck);
 				if(mysqli_num_rows($userCheckResult) > 0){
 					header("Location: ../home.php");
 					exit();
 				}
 				else{
 					// hasing the password
 					$hashedpswd = password_hash($pswd, PASSWORD_DEFAULT);
 					if(!empty($_POST['descrptn'])){
 						$descrptn = mysqli_real_escape_string($conn,$_POST['descrptn']);
 						if(!empty($_POST['link'])){
 							$link = mysqli_real_escape_string($conn,$_POST['link']);
 							$sql = "INSERT INTO users (username, email, pswd, postUploaded, descrptn, link) VALUES ('$username', '$email', '$hashedpswd', '0', '$descrptn', '$link')";
 						}
 						else{
 							$sql = "INSERT INTO users (username, email, pswd, postUploaded, descrptn) VALUES ('$username', '$email', '$hashedpswd', '0', '$descrptn')";
 						}
 					}
 					else{
 						if(!empty($_POST['link'])){
 							$link = mysqli_real_escape_string($conn,$_POST['link']);
 							$sql = "INSERT INTO users (username, email, pswd, postUploaded, link) VALUES ('$username', '$email', '$hashedpswd', '0', '$link')";
 						}
 						else{
 							$sql = "INSERT INTO users (username, email, pswd, postUploaded) VALUES ('$username', '$email', '$hashedpswd', '0')";
 						}
 					}
 					mysqli_query($conn, $sql);
 					header("Location: ../home.php");
 					exit();
 				}
 			}
 		}

 	}else{
 		header("Location: ../home.php");
 		exit();
 	}
 ?>