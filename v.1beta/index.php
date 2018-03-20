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
	</head>
	<body>
		<?php
		session_start();
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
          				<?php if ((!isset($_SESSION["username"])) || ($_SESSION["username"] == "")) { ?>
          					<li><a href="login.php">LOGIN</a></li>
          				<?php } else { ?>
          					<li><a href="m/logout.php">LOGOUT</a></li>
          					<li><a href="#"><img class="img-circle" src="images/profile.jpg" style="width:32px;" alt="">&nbsp;&nbsp;<?php echo $_SESSION["username"]; ?></a></li>
          				<?php } ?>
          				<!-- <li><a href="#"><span class="badge">2</span></a></li> -->
        			</ul>
      			</div>
    		</div>
  		</div><!-- /.navbar -->
	</div>

	<div class="parallax">
		<div class="container">
			<div class="row">
				<div class="col col-4-lg">
					<div class="caption">
						<h1><strong>Ribuan video pembelajaran<br>bisa anda lihat di Eduval</strong></h1>
						<!-- <p>Terhubung dengan lebih dari 200 akun dosen di berbagai<br>perguruan tinggi di Indonesia</p> -->
						<button class="border"><a href="#kategori">MEMULAI</a></button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="kategori" style="background-color:white;text-align:center;padding:50px 80px;">
		<div class="photo-grid">
			<div class="container">
				<div class="row">
					<div class="col col-md-12">
						<h2 style="text-align:center;letter-spacing:2px;padding-bottom:5px;color:#777;">Topik video populer</h2>
						<hr>
					</div>
					<div class="col col-md-12">
						<p style="text-align:right;font-size:16px;padding-bottom:3px;color:#888;"><a href="kategori.php">Lihat Selengkapnya</a></p>
					</div>
					<div class="col col-md-3">
						<div class="lightbox">
							<img style="width:100%;" src="images/rails.jpg" alt="">
							<div class="imagcaption"><strong>Mata Kuliah 1</strong><br>999999 viewers</div>
						</div>
					</div>
					<div class="col col-md-3">
						<div class="lightbox">
							<img style="width:100%;" src="images/park.jpg" alt="">
							<div class="imagcaption"><strong>Mata Kuliah 2</strong><br>999999 viewers</div>
						</div>
					</div>
					<div class="col col-md-3">
						<div class="lightbox">
							<img style="width:100%;" src="images/traffic.jpg" alt="">
							<div class="imagcaption"><strong>Mata Kuliah 3</strong><br>999999 viewers</div>
						</div>
					</div>
					<div class="col col-md-3">
						<div class="lightbox">
							<img style="width:100%;" src="images/bridge.jpg" alt="">
							<div class="imagcaption"><strong>Mata Kuliah 4</strong><br>999999 viewers</div>
						</div>
					</div>
					<div class="col col-md-3">
						<div class="lightbox">
							<img style="width:100%;" src="images/benches.jpg" alt="">
							<div class="imagcaption"><strong>Mata Kuliah 5</strong><br>999999 viewers</div>
						</div>
					</div>
					<div class="col col-md-3">
						<div class="lightbox">
							<img style="width:100%;" src="images/coast.jpg" alt="">
							<div class="imagcaption"><strong>Mata Kuliah 6</strong><br>999999 viewers</div>
						</div>
					</div>
					<hr>
				</div>
			</div>
		</div>
	</div>


	<!-- Scripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>