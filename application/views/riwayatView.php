<!DOCTYPE html>
<html lang="en">
<head>
<title>Riwayat</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">
<link rel="icon" href="style/user/images/favicon.ico" type="style/user/image/x-icon">
<link rel="shortcut icon" href="style/user/images/favicon.ico" type="style/user/image/x-icon" />

<link rel="stylesheet" href="style/user/css/bootstrap.css" type="text/css" media="screen">
<link rel="stylesheet" href="style/user/css/bootstrap-responsive.css" type="text/css" media="screen">    
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="style/user/css/style.css" type="text/css" media="screen">

<script type="text/javascript" src="style/user/js/jquery.js"></script>  
<script type="text/javascript" src="style/user/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="style/user/js/superfish.js"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->

<script type="text/javascript" src="style/user/js/jquery.ui.totop.js"></script>
<script>
$(document).ready(function() {
    //

}); //
$(window).load(function() {
    //

}); //
</script>       
<!--[if lt IE 8]>
        <div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg"border="0"alt=""/></a></div>  
    <![endif]-->    

<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>      
  <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
</head>

<body class="main">
<div id="main">
<div class="top1_wrapper">
<div class="top1">
<div class="container">
<div class="row">
<div class="span12">
<div class="top1_inner clearfix">
    
<div class="top2 clearfix">
<header><div class="logo_wrapper"><a href="index.html" class="logo"><img style="max-width : 100px" src="style/user/images/logo.png" alt=""></a></div></header>  
<div class="top3 clearfix">
<div class="phone1">
    <div class="txt1">Costumer Service</div>
    <div class="txt2">081234611145</div>
</div>

</div>
</div>

</div>
</div>
</div>
</div>
</div>
</div>


<div id="inner">

<div id="content">
<div class="container">
<div class="row">
<div class="span12">

<div class="breadcrumbs1"><a href="home">Beranda</a><span></span>Riwayat</div>



<div class="row">

<div class="span4">
    
<div class="box1">
    
<h2>Riwayat</h2>

<ul class="ul1">
  <li><p class="progress">Semua riwayat</p></li>
  <li><p class="progress">Berkas yang sudah selesai</p></li>
  <li><p class="progress">Berkas yang belum diproses</p></li>
</ul>

</div>


</div>

<div class="span8">

<h1>Semua Riwayat</h1>
                                        <?php
                                        $i=0; 
                                        foreach ($cetak as $row) {?>
                                            <!-- NOMOR -->
                                            <ul class="nav nav-tabs">
                                                <li class="active"><a href="#"><b>No. <?php $i++;echo $i; ?></b></a></li>
                                            </ul>
                                            

                                                <div class="panel panel-default">
                                               <div class="panel-heading">Waktu Cetak</div>
                                               <div class="panel-body"><?php echo $row['waktu']; ?></div>
                                               <div class="panel-heading">Berkas</div>
                                               <div class="panel-body"><?php echo $row['berkas']; ?></div>
                                               <div class="panel-heading">Status</div>
                                               <div class="panel-body">
                                                <?php if($row['id_status']==1){
                                                    echo "<div class='alert alert-warning' role='alert'>
                                                    ".$row['status']."</div>";
                                                }else if($row['id_status']==2){
                                                    echo "<div class='alert alert-success' role='alert'>
                                                    ".$row['status']."</div>";
                                                    }else{echo "<div class='alert alert-danger' role='alert'>
                                                    ".$row['status']."</div>";

                                                } ?></div>

                                            </div>
                                          

                                        <?php }; ?>



                                    </div>                     
</div>






<!-- Langkah -->


</div>


    

</div>  
</div>  
</div>  
</div>

<!-- Footer -->

<div class="bot1">
<div class="container">
<div class="row">
<div class="span12">
<div class="bot1_inner">
<div class="row">
<div class="span4">
    
<div class="logo2_wrapper"><a href="index.html" class="logo2"><img style = "max-width : 100px" src="style/user/images/logo.png" alt=""></a></div>

<footer><div class="copyright">Copyright   © 2019. All rights reserved.<br><a href="#">Privacy Policy</a></div></footer>


</div>
<div class="span4">
    
<div class="bot1_title">Hubungi Kami</div>

Jl. Jawa 20 C Jember<br>
081234611145<br>


</div>
<div class="span4">
    
<div class="bot1_title">Follow Us:</div>    

<div class="social_wrapper">
        <ul class="social clearfix">
        <li><a href="#"><img src="images/social_ic1.png"></a></li>
        <li><a href="#"><img src="images/social_ic2.png"></a></li>
        <li><a href="#"><img src="images/social_ic3.png"></a></li>      
        <li><a href="#"><img src="images/social_ic4.png"></a></li>
        </ul>
    </div>


</div>  
</div>  
</div>
</div>  
</div>  
</div>  
</div>

</div>  
</div>
<script type="text/javascript" src="style/user/js/bootstrap.js"></script>
</body>
</html>