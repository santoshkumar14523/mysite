<?php 
	session_start();
	if(isset($_POST['login-btn'])){
		include_once "conn.php";
		$username = $_POST['login-username'];
		$pswd = $_POST['login-pswd'];
		if(empty($username) || empty($pswd)){
			header("Location: ../home.php");
			exit();
		}else{
			$userCheck = "SELECT * FROM users WHERE username = '$username'";
			$userCheckResult = mysqli_query($conn, $userCheck);
			if(mysqli_num_rows($userCheckResult) < 1){
				header("Location: ../home.php");
				exit();
			}else{
				if($row = mysqli_fetch_assoc($userCheckResult)){
					$hashedPswdCheck = password_verify($pswd, $row['pswd']);
					if($hashedPswdCheck == false){
						header("Location: ../home.php");
						exit();
					}elseif($hashedPswdCheck == true){
						$_SESSION['username'] = $row['username'];
						$_SESSION['email'] = $row['email'];
						$_SESSION['descrptn'] = $row['descrptn'];
						$_SESSION['link'] = $row['link'];
						$_SESSION['postUploaded'] = $row['postUploaded'];
						if(isset($_POST['rmbrme'])){
							setcookie('email', $row['username'], time()+3600*24*30, '/');
							setcookie('pswd', $row['pswd'], time()+3600*24*30, '/');
						}
						header("Location: ../index.php");
						exit();
					}
				}
			}
		}
	}else{
		header("Location: ../home.php");
		exit();
	}
 ?>