<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Eduval</title>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,800,900">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<!-- Bootstrap -->
		<link href="css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/login.css">
	</head>

	<body class="gradient-green">
		<div class="login-page">
			<div class="form">
				<div class="brand">Eduval</div>
		    	<form class="register-form" method="POST" action="m/register.php">
		      		<input type="text" placeholder="username" name="name" required="" />
		      		<input type="text" placeholder="email address" name="email" required="" />
		      		<button name="submit">buat akun</button>
		      		<p class="message">Sudah mendaftar? silahkan <a href="#">masuk</a></p>
		    	</form>
		    	<form class="login-form" method="POST" action="m/signin.php">
		      		<input type="text" placeholder="username" name="name" required="" />
		      		<input type="password" placeholder="password" name="password" required="" />
		      		<button name="submit">masuk</button>
		      		<p class="message">Belum memiliki akun? <a href="#">Buat disini</a></p>
		    	</form>
		  	</div>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    	<script src="js/bootstrap.min.js"></script>	
    	<script>
			$('.message a').click(function(){
			   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
			});
		</script>
	</body>
</html>