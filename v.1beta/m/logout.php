<?php
	session_start();
	$_SESSION["username"] = "";
	session_destroy();
	echo '<script>alert("Logout Berhasil!")</script>';
	echo "<script>setTimeout(\"location.href = '../index.php';\")</script>";
?>