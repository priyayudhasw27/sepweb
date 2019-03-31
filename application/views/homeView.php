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
		<title>Startup</title>

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
		<body>

			  <header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.html" class="logo"><img style="max-width : 70px" src="style/img/logo.png" alt=""></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="#home">Beranda</a></li>
				          <li><a href="#offer">SEP</a></li>
				          <li><a href="#about">Langkah-langkah</a></li>
				          <li><a href="#cetak">Cetak</a></li>
				          <?php 
								if ($this->login == 1){
									$konfirmasi = "Apakah anda yakin ingin keluar?";
									echo '<li><a href="Riwayat">Akun Saya</a></li>';
									echo '<li><a href="logout">Logout</a></li>';
								}
								else{
									echo '<li><a href="login">Login</a></li>';
								}
						?>  
<!-- 				          <li><a href="#blog">Blog</a></li> -->
				          <li class="menu-has-children"><a href="">Pages</a>
				            <ul>
				              <li><a href="generic.html">Generic</a></li>
				              <li><a href="elements.html">Elements</a></li>
				            </ul>
				          </li>
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->


			<!-- start banner Area -->
			<section class="banner-area" id="home">	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-7">
							<h1>
								Selamat Datang di SEPweb				
							</h1>
							<p class="pt-20 pb-20">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.
							</p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start we-offer Area -->
			<section class="we-offer-area section-gap" id="offer">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">Setengah Enam Pagi</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-6">
							<div class="single-offer d-flex flex-row pb-30">
								<div class="icon">
									<img src="style/img/s1.png" alt="">
								</div>
								<div class="desc">
									<a href="#"><h4>Buka lebih pagi</h4></a>
									<p>
										Mulai aktivitas anda lebih awal, dan tingkatkan produktivitas
									</p>
								</div>
							</div>
							<div class="single-offer d-flex flex-row pb-30">
								<div class="icon">
									<img src="style/img/s3.png" alt="">
								</div>
								<div class="desc">
									<a href="#"><h4>Kualitas tinta terbaik</h4></a>
									<p>
										Mencetak dengan kualitas tinta terbaik dengan harga yang menyenangkan
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="single-offer d-flex flex-row pb-30">
								<div class="icon">
									<img src="style/img/s2.png" alt="">
								</div>
								<div class="desc">
									<a href="#"><h4>Smart Security</h4></a>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation.
									</p>
								</div>
							</div>
							<div class="single-offer d-flex flex-row pb-30">
								<div class="icon">
									<img src="style/img/s4.png" alt="">
								</div>
								<div class="desc">
									<a href="#"><h4>Smart Security</h4></a>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation.
									</p>
								</div>
							</div>
						</div>												
					</div>
				</div>	
			</section>
			<!-- End we-offer Area -->
			
	
			<!-- Start home-video Area -->
			<section class="home-video-area" id="about">
				<div class="container-fluid">
					<div class="row justify-content-end align-items-center">
						<div class="col-lg-4 no-padding video-right">
							<!-- <p class="top-title">Tutorial for beginner</p> -->
							<h1>Langkah-langkah Mencetak</h1>
							<p><span>Apa yang kami tawarkan di SEPweb</span></p>
							<p>
								Anda dapat mencetak dokumen kapan saja dan dimana saja
							</p>
						</div>
						<section class="video-area col-lg-6">
							<div class="overlay overlay-bg"></div>
							<div class="container">
								<div class="video-content">
									<a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="play-btn"><img src="img/play-btn.png" alt=""></a>
								</div>
							</div>
						</section>											
					</div>
				</div>	
			</section>
			<!-- End home-aboutus Area -->


			<!-- Start callto-action Area -->
			<section class="callto-action-area relative section-gap" id="cetak">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content col-lg-9">
							<div class="title text-center">
								<h1 class="mb-10 text-white">Mulai mencetak</h1>
								<p class="text-white">Cetak dokumen anda secara online sekarang!</p>
								<a class="primary-btn" href="UploadFile">Cetak</a>
							</div>
						</div>
					</div>	
				</div>	
			</section>
			<!-- End calto-action Area -->


			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row footer-bottom d-flex justify-content-between">
						<div class="col-lg-4 col-sm-12">
							<a href="index.html" class="logo"><img style="max-width : 100px" src="style/img/logo.png" alt=""></a>
						</div>
						<p class="col-lg-8 col-sm-12 footer-text m-0">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->		

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



