<?php
	session_start();
	require 'conn.php';
	if (isset($_POST['submit'])) {
		$username =  mysqli_escape_string($con, $_POST['name']);
		$password =  mysqli_escape_string($con, md5($_POST['password']));
		$sql = "SELECT username, password, active FROM users_table WHERE username='".$username."' AND password='".$password."' AND active='1'";
		$search = mysqli_query($con, $sql);
		$row = mysqli_fetch_array($search);
		//$match = mysqli_num_rows($search);
		if(is_array($row)){
		    echo '<script>alert("Login completed")</script>';
			echo "<script>setTimeout(\"location.href = '../kategori.php';\")</script>";
		    $_SESSION["username"] = $row["username"];
		    
		}else{
		   echo '<script>alert("Login Failed! Please make sure that you enter the correct details and that you have activated your account")</script>';
		   echo "<script>setTimeout(\"location.href = '../login.php';\")</script>";
		}
	}
?> m,