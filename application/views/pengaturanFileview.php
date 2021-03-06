<!DOCTYPE html>
<html lang="en">
<head>
<title>Pengaturan FIle</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">
<link rel="icon" href="style/user/images/favicon.ico" type="style/user/image/x-icon">
<link rel="shortcut icon" href="style/user/images/favicon.ico" type="style/user/image/x-icon" />

<link rel="stylesheet" href="style/user/css/bootstrap.css" type="text/css" media="screen">
<link rel="stylesheet" href="style/user/css/bootstrap-responsive.css" type="text/css" media="screen">    
<link rel="stylesheet" href="style/user/css/style.css" type="text/css" media="screen">

<script type="text/javascript" src="style/user/js/jquery.js"></script>  
<script type="text/javascript" src="style/user/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="style/user/js/superfish.js"></script>

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

<div class="breadcrumbs1"><a href="home">Beranda</a><span></span>Pengaturan Berkas</div>



<div class="row">
<div class="span8">
<div class="alert alert-success alert-st-one" role="alert"><p class="message-mg-rt"><?php echo $error;
    echo " | ";
    echo $nama_file;?></p></div>
<h1>Pengaturan Berkas</h1>
                     
                            <!-- Form -->
                                <!-- ================================================================ -->
                                <form role="form" action="pengaturanFile/simpan" method="POST">
                                    
                                    <!-- Pilihan Warna -->
                                    <!-- ================================================================ -->
                                    <div class="form-group-inner">
                                        <div class="row">
                                                <div class="span1">
                                                    <label>Warna</label>
                                                </div>
                                                <div class="span4">
                                                    <div class="form-select-list">
                                                        <select  class="form-control custom-select-value" name="id_warna">
                                                            <option value="0">Pilih</option>
                                                            <?php foreach($warna as $row){
                                                                echo "<option value='".$row['id_warna']."'>".$row['warna']."</option>";}
                                                                ?>
                                                            </select>
                                                        </div>                
                                                    </div>
                                                </div>
                                        </div>

                                        <!-- Kertas -->
                                        <!-- ================================================================ -->
                                        <div class="form-group-inner">
                                            <div class="row">
                                                    <div class="span1">
                                                        <label>Kertas</label>
                                                    </div>
                                                    <div class="span4">
                                                        <div class="form-select-list">
                                                            <select required="" oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')" class="form-control custom-select-value" name="id_kertas">
                                                                <option value="0">Pilih</option>
                                                                <?php foreach($kertas as $row){
                                                                    echo "<option value='".$row['id_kertas']."'>".$row['kertas']."</option>";}
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>

                                            <!-- Pilihan FInishing -->
                                            <!-- ================================================================ -->
                                            <div class="form-group-inner">
                                                <div class="row">
                                                        <div class="span1">
                                                            <label>Finishing</label>
                                                        </div>
                                                        <div class="span4">
                                                            <div class="form-select-list">
                                                                <select required="" class="form-control custom-select-value" name="id_finishing">
                                                                    <option value="0">Pilih</option>
                                                                    <?php foreach($finishing as $row){
                                                                        echo "<option value='".$row['id_finishing']."'>".$row['finishing']."</option>";}
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>

                                                <!-- Salinan -->
                                                <!-- ================================================================ -->
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                            <div class="span1">
                                                                <label>Salinan</label>
                                                            </div>
                                                            <div class="span4">
                                                                <div class="form-select-list">
                                                                    <input required="" oninvalid="this.setCustomValidity('Kolom Tidak Boleh Kosong')" type="number" class="form-control" name="salinan" style="color: #000">
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>

                                                <!-- Keterangan -->
                                                <!-- ================================================================ -->
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                            <div class="span1">
                                                                <label>Keterangan</label>
                                                            </div>
                                                            <div class="span4">
                                                                <div class="form-select-list">
                                                                    <textarea cols="1" rows="5" style="vertical-align: top; resize: none;" type="text" class="form-control" name="keterangan"placeholder="Contoh : Semua halaman | diprint hanya halaman 3 | di print hanya halaman 2 dan 3" style="color: #000"></textarea> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>         

                                                <!-- Konfirmasi -->
                                                <!-- ================================================================ -->

                                                <div class="row">
                                                <div class="span6">
                                                        <input type="checkbox" name="konfirmasiFile" required="harus di centang"> File yang saya upload sudah benar
                                                    </div>
                                                </div>

                                                <!-- Tombol Cetak -->
                                                <!-- ================================================================ -->                     
                                                <div class="row">
                                                    <div class="span6" style="float:none">
                                                        <div class="login-button-pro" style="text-align: center">
                                                         <input type="submit" class="login-button login-button-lg" name="btn_cetak" value="Cetak" onclick="return confirm('Apakah data yang anda masukan sudah benar?')"/>
                                                     </div>
                                                 </div>
                                             </div>
                                 </form>
                                 <!-- Form Selesai -->
                                 <!-- ================================================================ -->

                        </div>






<!-- Langkah -->

<div class="span4">
    
<div class="box1">
    
<h2>Progress</h2>

<ul class="ul1">
  <li><p class="progress-done">Login</p></li>
  <li><p class="progress-done">Unggah Berkas</p></li>
  <li><p class="progress-active">Pengaturan Berkas</p></li>
  <li><p class="progress">Konfirmasi</p></li>  
</ul>

</div>


</div>
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