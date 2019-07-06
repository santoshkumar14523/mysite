<?php 
	if(isset($_POST['upload'])){
		$title = $_POST['title']; // Title of the post
		$link = $_POST['link']; // Link related to the post
		// $descrptn = $_POST['descrptn'];
		$descrptn = str_replace("'", "''", $_POST['descrptn']);
		$file = $_FILES['file'];
		$file_name = $file['name'];
		$file_size = $file['size'];
		$file_error = $file['error'];
		$file_temp_name = $file['tmp_name'];
		$file_temp_ext = explode('.', $file_name);
		$file_ext = strtolower(end($file_temp_ext));
		$file_time_stamp = time();
		$allowed_ext = array('jpg', 'jpeg', 'png');

		if(in_array($file_ext, $allowed_ext)){
			if($file_error === 0){
				if($file_size < 5000000){
					$file_new_name = uniqid('', true).'.'.$file_ext;
					$file_new_destination = '../uploads/'.$file_new_name;

					include_once "conn.php";
					$sql = "INSERT INTO poststest2 (title, filename, descrptn, link, uploadTime) VALUES ('$title', '$file_new_name', '$descrptn', '$link', '$file_time_stamp')";
					echo $sql;
					if(mysqli_query($conn, $sql)){
						echo 'your query is updated';
					}else {
						echo mysqli_error($conn);
					}
					move_uploaded_file($file_temp_name, $file_new_destination);
					header("Location: ../index.php");
				}else{
					echo 'Try Uploading smaller size';
				}
			}else{
				echo 'There was a error uploading file';
			}
		}else{
			echo "We don't support this kind of file";
		}
	}else{
		echo 'Get The Hell Out of here';
	}
?>