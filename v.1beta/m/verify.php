<?php
	require 'conn.php';
	if(isset($_GET['m']) && !empty($_GET['m']) AND isset($_GET['h']) && !empty($_GET['h'])){
    	$email = mysql_escape_string($_GET['m']);
    	$hash = mysql_escape_string($_GET['h']);
    	$search = mysqli_query($con, "SELECT email, hash, active FROM users_table WHERE email='".$email."' AND hash='".$hash."' AND active='0'"); 
		$match  = mysqli_num_rows($search);
 
		//echo $match;
		if($match > 0){
		    //echo "data ada";
			mysqli_query($con, "UPDATE users_table SET active='1' WHERE email='".$email."' AND hash='".$hash."' AND active='0'");
			echo '<script>alert("Your email has been activated. Thanks for using Eduval")</script>';
			echo "<script>setTimeout(\"location.href = '../index.php';\")</script>";
		}else{
		    echo '<script>alert("error: Data not found")</script>';
		}
	}else{
	    
	}
?>