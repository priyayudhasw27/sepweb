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
        <title>Daftar</title>

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
                            <h1>Daftar</h1>
                            <form action="DaftarPengguna" method="POST">
                                    <div class="mt-10">
                                        <input placeholder="Nama Lengkap" name="namaLengkap" type="text" required="" oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')" class="single-input" autofocus/>
                                    </div>
                                    <div class="mt-10">
                                        <input placeholder="Nama Pengguna" name="namaPengguna" type="text" required="" oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')" class="single-input" autofocus/>
                                    </div>
                                    <div class="mt-10">
                                        <input placeholder="Email" name="email" type="email" required="" oninvalid="this.setCustomValidity('Format Email Salah')" class="single-input" autofocus/>
                                    </div>
                                    <div class="mt-10">
                                        <input placeholder="Alamat" name="alamat" type="text" required="" oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')" class="single-input" autofocus/>
                                    </div>
                                    <div class="mt-10">
                                        <input placeholder="No Telepon" name="noTlp" onkeypress="return hanyaAngka(event)" type="text" required="" oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')" class="single-input" autofocus/>
                                    </div>
                                    <div class="mt-10">
                                        <input placeholder="Kata Sandi" name="kataSandi" type="password" required="" oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')" value="" class="single-input" />
                                    </div>
                                    <br>
                                    <input type="submit" class="genric-btn primary radius" name="btn_log" value="Daftar"/>
                                    <a href="Login" class="genric-btn info-border radius">Batal</a>
                                    
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



