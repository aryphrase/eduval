<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Eduval</title>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,800,900">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<!-- Bootstrap -->
		<link href="css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<?php
		session_start();
		if((!isset($_SESSION["username"])) || ($_SESSION["username"] == "")){
			echo "<script>setTimeout(\"location.href = 'login.php';\")</script>";
		} else {
		?>
	<div id="nav">
  		<div class="navbar navbar-inverse navbar-fixed-top gradient-green" data-spy="affix" data-offset-top="100">
    		<div class="container">
      		<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
			    <a href="index.php" class="navbar-brand">Eduval</a>
			    <a class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
			        <span class="sr-only">Toggle navigation</span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
      			</a>
      			<div class="navbar-collapse collapse">
        			<ul class="nav pull-right navbar-nav">
        				<li><a href="#">KONTAK</a></li>
          				<li><a href="kategori.php">KATEGORI</a></li>
          				<li><a href="m/logout.php">LOGOUT</a></li>
          				<li><a href="#"><img class="img-circle" src="images/profile.jpg" style="width:32px;" alt="">&nbsp;&nbsp;<?php echo $_SESSION["username"]; ?></a></li>
          				<!-- <li><a href="#"><span class="badge">2</span></a></li> -->
        			</ul>
      			</div>
    		</div>
  		</div><!-- /.navbar -->
	</div>

	<div class="video-grid" style="background-color:white;text-align:center;padding:100px 0px;">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="video-player embed-responsive embed-responsive-16by9"> 
					    <iframe class="embed-responsive-item" src="https://drive.google.com/file/d/1L0Bd8QdZ8zFvcMCOHkG2-lGKRyq5l9T7/preview" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>
					<div class="video-caption">
						<h2>Pengaruh Musik Dangdut Terhadap Kecepatan Prosesor</h2>
						<p>999 views</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="video-list">
						<div class="container">
							<div class="row">
								<div class="col-md-2">
									<div class="thumbnail">
										<img src="images/park.jpg" class="img-thumbnail">
										<div class="duration"><i class="fa fa-play"></i> 00:00</div>
									</div>
								</div>
								<div class="col-md-2">
									<div class="video-list-caption">
										<h4>Pengaruh Musik Dangdut Terhadap Kecepatan Prosesor</h4>
										<p>999 views</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="video-list">
						<div class="container">
							<div class="row">
								<div class="col-md-2">
									<div class="thumbnail">
										<img src="images/park.jpg" class="img-thumbnail">
										<div class="duration"><i class="fa fa-play"></i>00:00</div>
									</div>
								</div>
								<div class="col-md-2">
									<div class="video-list-caption">
										<h4>Pengaruh Musik Dangdut Terhadap Kecepatan Prosesor</h4>
										<p>999 views</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="video-list">
						<div class="container">
							<div class="row">
								<div class="col-md-2">
									<div class="thumbnail">
										<img src="images/park.jpg" class="img-thumbnail">
										<div class="duration"><i class="fa fa-play"></i> 00:00</div>
									</div>
								</div>
								<div class="col-md-2">
									<div class="video-list-caption">
										<h4>Pengaruh Musik Dangdut Terhadap Kecepatan Prosesor</h4>
										<p>999 views</p>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Scripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <?php } ?>
	</body>
</html>
