<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login Admin SEP</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="style/img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="style/css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="style/css/font-awesome.min.css">
    <!-- adminpro icon CSS
        ============================================ -->
    <link rel="stylesheet" href="style/css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="style/css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="style/css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="style/css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="style/css/normalize.css">
    <!-- form CSS
        ============================================ -->
    <link rel="stylesheet" href="style/css/form.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="style/style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="style/css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="style/js/vendor/modernizr-2.8.3.min.js"></script>
    <style type="text/css">
      .tengah1 {
        margin-top: 90px;
    }
    .tengah2{
      margin-top: 40px;
    }
    </style>
</head>

<body class="materialdesign">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Header top area start-->



    <div class="wrapper-pro">

   
            <!-- login Start-->
    <div class="login-form-area mg-t-30 mg-b-40 tengah1">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4"></div>
                            <form role="form" action="login" method="POST">
                            <div class="col-lg-4">
                                <div class="login-bg">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="logo">
                                                <a href="#"><img style="max-width: 200px" src="style/img/logo_sep.png" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="login-title">
                                                 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                      <!-- <div class="col-lg-12"> -->
                                      
                                        <div class="col-xs-8 center-block" style="float: none;">
                                            <div class="login-input-area" style="text-align: center">
                                                <input placeholder="Nama Pengguna" name="namaPengguna" type="text" autofocus/>
                                                <i class="fa fa-user login-user" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                      
                                        <div class="col-xs-8 center-block" style="float: none;">
                                            <div class="login-input-area" style="text-align: center">
                                                <input placeholder="Kata Sandi" name="kataSandi" type="password" value=""/>
                                                <i class="fa fa-lock login-user"></i>
                                            </div>
                                            <div>
                                              <p style="color:red"><?php echo $model->notif;?></p>
                                            </div>
                                        
                                        </div>
                                    <!-- </div> -->
                                    </div>
                                    
                                    <div class="row">
                                      <!-- <div class="col-xs-3"> </div> -->
                                        <div class="col-xs-8 center-block" style="float:none">
                                            <div class="login-button-pro" style="text-align: center">
                                                
                                                <input type="submit" class="login-button login-button-lg" name="btn_log" value="Masuk"/>
                                               
                                            </div>
                                        </div>
                                        <!-- <div class="col-xs-3"> </div> -->
                                    </div>
                                </div>
                            </div>
                        </form>

                        
                        
                    </div>
                    
                    <div class="row tengah2">
                      <div class="col-xs-4 center-block" style="float: none;">
                        <p style="text-align: center;">Copyright &#169; 2018 SEP</p>
                      </div>
                  </div>
                </div>
            </div>
            <!-- login End-->
        </div>
    </div>
    <!-- Footer Start-->

    
    <!-- Footer End-->
    <!-- jquery
        ============================================ -->
    <script src="style/js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="style/js/bootstrap.min.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="style/js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="style/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="style/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="style/js/jquery.scrollUp.min.js"></script>
    <!-- form validate JS
        ============================================ -->
    <script src="style/js/jquery.form.min.js"></script>
    <script src="style/js/jquery.validate.min.js"></script>
    <script src="style/js/form-active.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="style/js/main.js"></script>
</body>

</html>