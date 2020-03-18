<?php

session_start();

if( !isset($_SESSION["masukadmin"])){
  header("Location:../../login.php");
  exit;

}

$wali = $_GET["wali_kelas"];

require 'functions/function_wali_kelas.php';

$wali = query("SELECT * FROM tb_wali_kelas WHERE id_wali_kelas='$wali'")[0];

if(isset($_POST["submit"])){


    if(ubah($_POST) > 0){
      echo "<script>
              alert('data berhasil diubah!');
              document.location.href = '../wali_kelas.php';
            </script>";
    }else{
      echo "<script>
			        alert('data gagal diubah!');
			        document.location.href = '../wali_kelas.php';
      </script>";
      
    }
}

?>
          <!DOCTYPE html>
          <html lang="en">

          <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="">
            <meta name="main" content="menu utama">
            <meta name="keyword" content="Agenda , absen , EFORM ,Siswa,guru">
            <title>EFORM</title>

            <!-- Bootstrap core CSS -->
            <link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

            <!--external css-->
            <link href="../../lib/font-awesome/css/font-awesome.css" rel="stylesheet" />

            <!-- Custom styles for this template -->
            <link href="../../css/style.css" rel="stylesheet">
            <link href="../../css/style-responsive.css" rel="stylesheet">

          </head>

          <body>
            <section id="container">
            
              <!--header start-->
              <header class="header black-bg">
                <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right"></div>
                </div>
                <!--logo start-->
                <a href="" class="logo"><b>E<span>form</span></b></a>
                <!--logo end-->
                <div class="nav notify-row" id="top_menu">
                  <!--  notification start -->
                  <ul class="nav top-menu">
                <div class="top-menu">
                  <ul class="nav pull-right top-menu ">
                  </ul>
                </div>
              </header>

              <!--header end-->
              
              <!-- **********************************************************************************************************************************************************
                  MAIN SIDEBAR MENU
            
            
                  *********************************************************************************************************************************************************** -->
              <!--sidebar start-->
            
            
              <aside>
                <div id="sidebar" class="navbar-brand mb-5 ">
                  
                  <!-- sidebar menu start-->
                  
                  <ul class="sidebar-menu" id="nav-accordion">
                  <p class="centered"><img src="../img/gambar/admin.png" class="img-circle" width="80"></p>
                    <h5 class="centered">
                    
                    ADMIN
      
                    </h5>
                    <li class="mt">
                      <a href="../index.php">
                        <i class="fa fa-home"></i>
                        <span>halaman Utama</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                      <a  href="../user.php">
                        <i class="fa fa-user"></i>
                        <span>user</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                      <a  href="../kelas.php">
                        <i class="fa fa-building-o"></i>
                        <span>kelas</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                      <a href="../mapel.php">
                        <i class="fa fa-edit"></i>
                        <span>mata pelajaran</span>
                        </a>
                    </li>
                    
                    <li class="sub-menu">
                      <a href="../guru.php">
                        <i class="fa fa-group"></i>
                        <span>Guru</span>
                        </a>
                    </li>
                    
                    
                    <li class="sub-menu">
                      <a href="../agenda.php">
                        <i class="fa fa-book"></i>
                        <span>Agenda</span>
                        </a>
                    </li>
                    
                    
                    <li class="sub-menu">
                      <a href="../absen.php">
                        <i class="fa fa-list-alt"></i>
                        <span>Absen</span>
                        </a>
                    </li>
                    
                    
                    <li class="sub-menu">
                      <a href="../siswa.php">
                        <i class="fa fa-male"></i>
                        <span>Siswa</span>
                        </a>
                    </li>
                    
                    
                    <li class="sub-menu">
                      <a class="active" href="../wali_kelas.php">
                        <i class="fa fa-sitemap"></i>
                        <span>wali Kelas</span>
                        </a>
                    </li>
                    
                    <li class="sub-menu ">
                  
                        <a href="../../logout.php" onclick="return confirm('Yakin?')"> 
                      
                        <i class="fa fa-power-off"></i>
                        <span>logout</span>
                        </a>
                      
                    </li>
                  
                </div>
              </aside>

              <section id="main-content">
                <section class="wrapper turun text-center">
                   
                    <div class="row buleud justify-content-center">
                        <div class="col-lg-12">
          
                        <div class="form-panel buleud">
                            <h2 class="display-2  text-center">Edit Data Wali Kelas</h2>
                            
                                <div class="form-group marx">
                                <form action="" method="post">
                                
                                <input type="hidden" class="form-control buleud" name="id_wali_kelas" value="<?= $wali["id_wali_kelas"]; ?>">

                                    <label>Nama Wali Kelas</label>
                                    <input type="text" class="form-control buleud" name="nm_wali_kelas" value="<?= $wali["nm_wali_kelas"]; ?>">                                     

                                    <label>Kelas</label>
                                    <input type="text" class="form-control buleud" name="Kelas" value="<?= $wali["kelas"]; ?>">                                     

                                    <a href="wali_kelas.php" class="btn btn-danger buleud mt"><i class="fa fa-arrow-left"></i> kembali</a>
                                    <button class="btn btn-success buleud mt" name="submit" type="submit"><i class="fa fa-save"></i> Tambah</button>
                                </form>   
                                </div>
                                </div>
    
                            </div>
                        </div>
              </section>

        
</section>
      <!-- akhir menu utama -->
    
    
    </section>
        <!-- js placed at the end of the document so the pages load faster -->
        <script src="../../lib/jquery/jquery.min.js"></script>

        <script src="../../lib/bootstrap/js/bootstrap.min.js"></script>
        <script class="include" type="text/javascript" src="../../lib/jquery.dcjqaccordion.2.7.js"></script>
        <script src="../../lib/jquery.scrollTo.min.js"></script>
        <script src="../../lib/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="../../lib/jquery.sparkline.js"></script>
        <!--common script for all pages-->
        <script src="../../lib/common-scripts.js"></script>
        <script type="../../text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
        <script type="../../text/javascript" src="lib/gritter-conf.js"></script>
  </body>
  </html>