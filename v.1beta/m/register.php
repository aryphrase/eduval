<?php
require 'conn.php';
require 'PHPMailer/PHPMailerAutoload.php';
	if (isset($_POST['submit'])) {
		require 'dataAdmin.php';
		$name 	  = mysqli_escape_string($con, $_POST['name']);
		$email 	  = mysqli_escape_string($con, $_POST['email']);
		$pass 	  = rand(1000,5000);

		$hash = md5( rand(0,1000) );

		$sql = "INSERT INTO users_table (username, password, email, hash) VALUES ('".$name."', '".md5($pass)."', '".$email."', '".$hash."')";
		if (mysqli_query($con, $sql)) {
    		$to      = $email;
			$subject = 'Signup | Verification';
			$message = '
			 
			Thanks for signing up!<br>
			Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.<br><br><br>
			 
			------------------------<br>
			Username: '.$name.'<br>
			Password: '.$pass.'<br>
			------------------------<br><br><br>
			 
			Please click this link to activate your account:<br>
			http://localhost/eduval/m/verify.php?m='.$email.'&h='.$hash.'
			 
			';
			                     
			$headers = 'From:noreply@eduval.com' . "\r\n";
			/*mail($to, $subject, $message, $headers);*/
			$mail = new PHPMailer;
			$mail->isSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->Port = 587;
			$mail->SMTPSecure = 'tls';
			$mail->SMTPAuth = true;
			$mail->Username = $emailfrom;
			$mail->Password = $emailpass;
			$mail->addAddress($to);
			$mail->Subject = $subject;
			$mail->msgHTML($message);
			if (!$mail->send()) {
				$error = "Mailer Error: " . $mail->ErrorInfo;
				echo '<script>alert("'.$error.'")</script>';
			}else {
				echo '<script>alert("You has been registered! Please check and verify your email")</script>';
				echo "<script>setTimeout(\"location.href = '../login.php';\")</script>";
			}
		} else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($con);
    		echo "<script>setTimeout(\"location.href = '../login.php';\")</script>";
		}

		mysqli_close($con);
	}
?>