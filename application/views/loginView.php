	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Masuk</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="style/css/linearicons.css">
			<link rel="stylesheet" href="style/css/font-awesome.min.css">
			<link rel="stylesheet" href="style/css/bootstrap.css">
			<link rel="stylesheet" href="style/css/magnific-popup.css">
			<link rel="stylesheet" href="style/css/nice-select.css">					
			<link rel="stylesheet" href="style/css/animate.min.css">
			<link rel="stylesheet" href="style/css/owl.carousel.css">
			<link rel="stylesheet" href="style/css/main.css">
		</head>
		<body class="login-area">

			  
	
	
			<!-- Start home-video Area -->
			<section id="loginform">
				<div class="container-fluid">
					<div style="height: 100%;" class="row col-centered">
						<div class="col-lg-4" style="padding: 40px; background-color: #FFFFFF">
							<h1>Masuk</h1>
							<p><span><?php echo $this->alert; ?></span></p>
							<form action="Login" method="POST">
									<div class="mt-10">
										<input type="text" name="nama_pengguna" placeholder="Nama Pengguna" class="single-input" autofocus>
									</div>
									<div class="mt-10">
										<input type="text" name="kata_sandi" placeholder="Kata Sandi" class="single-input">
									</div>
									<br>
									<div class="row">
										<input type="submit" class="genric-btn primary radius" name="btn_log" value="Masuk"/>
										<a href="DaftarPengguna" class="genric-btn info-border radius">Daftar</a>
										<a href="Home" class="genric-btn info-border radius" style="align-items: right;">Kembali ke Beranda</a>
									</div>
									
								</form>
						</div>
																
					</div>
				</div>	
			</section>
			<!-- End home-aboutus Area -->	

			<script src="style/js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="style/js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="style/js/easing.min.js"></script>			
			<script src="style/js/hoverIntent.js"></script>
			<script src="style/js/superfish.min.js"></script>	
			<script src="style/js/jquery.ajaxchimp.min.js"></script>
			<script src="style/js/jquery.magnific-popup.min.js"></script>	
			<script src="style/js/owl.carousel.min.js"></script>			
			<script src="style/js/jquery.sticky.js"></script>
			<script src="style/js/jquery.nice-select.min.js"></script>			
			<script src="style/js/parallax.min.js"></script>		
			<script src="style/js/mail-script.js"></script>	
			<script src="style/js/main.js"></script>	
		</body>
	</html>



