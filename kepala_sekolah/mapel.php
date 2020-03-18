<?php
          session_start();
          if( !isset($_SESSION["masukkepala"])){
            header("Location:../login.php");
            exit;

        }

          include("../koneksi.php");
         
          $data=query("SELECT * FROM tb_mapel");

          $nm_kelas = $_SESSION["nm_kelas"];
          $gambar = $_SESSION["gambar"];
         
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
            <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

            <!--external css-->
            <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet" />

            <!-- Custom styles for this template -->
            <link href="../css/style.css" rel="stylesheet">
            <link href="../css/style-responsive.css" rel="stylesheet">

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
                <div id="sidebar" class="navbar-brand naek">
                  
                  <!-- sidebar menu start-->
                  
                  <ul class="sidebar-menu" id="nav-accordion">
                    <p class="centered"><img src="<?= $gambar; ?>" class="img-circle" width="80"></p>
                    <h5 class="centered">
                    
                    <?= $nm_kelas;?>
      
                    </h5>
                    <li class="mt">
                      <a href="index.php">
                        <i class="fa fa-home"></i>
                        <span>halaman Utama</span>
                      </a>
                    </li>

                    <li class="sub-menu">
                      <a href="user.php">
                        <i class="fa fa-user"></i>
                        <span>User</span>
                      </a>
                    </li>

                    <li class="sub-menu">
                      <a href="kelas.php">
                        <i class="fa fa-building-o"></i>
                        <span>Kelas</span>
                      </a>
                    </li>

                    <li class="sub-menu">
                      <a class="active" href="mapel.php">
                        <i class="fa fa-list-alt"></i>
                        <span>Mapel</span>
                      </a>
                    </li>

                    <li class="sub-menu">
                      <a href="agenda.php">
                        <i class="fa fa-book"></i>
                        <span>Agenda</span>
                      </a>
                    </li>

                    <li class="sub-menu">
                      <a href="absen.php">
                        <i class="fa fa-list-alt"></i>
                        <span>Absen</span>
                      </a>
                    </li>

                    <li class="sub-menu">
                      <a href="guru.php">
                        <i class="fa fa-group"></i>
                        <span>Guru</span>
                      </a>
                    </li>

                    <li class="sub-menu">
                      <a href="siswa.php">
                        <i class="fa fa-male"></i>
                        <span>Siswa</span>
                      </a>
                    </li>

                    <li class="sub-menu">
                      <a href="wali_kelas.php">
                        <i class="fa fa-sitemap"></i>
                        <span>Wali Kelas</span>
                      </a>
                    </li>

                    <li class="sub-menu">
                        <a href="../logout.php" onclick="return confirm('Yakin?')"> 
                        <i class="fa fa-power-off"></i>
                        <span>logout</span>
                        </a>
                      
                    </li>
                  
                </div>
              </aside>

              <!-- menu utama -->
              <section id="main-content">
              <section class="wrapper turun">
              <div class="form-group">
                  <form action="get" class="pull-left mail-src-position">
                  <div class="input-append">
                  <label>Cari Mapel</label>
                    <input class="text" class="form-control " placeholder="Cari">
                    <input class="form mb" type="submit" value="CARI">
                  </div>
                  </form>
                  <br>
              <table class="table table-bordered table-striped">
              <thead>
                  <tr>
	                  <th>No.</th>
	                  <th>id mapel</th>
	                  <th>Nama Mapel</th>
                  </tr>
              </thead>    
	              <tbody>
                <?php $i =1;?>
                <?php foreach( $data as $row ) : ?>
                <tr>
                  <td><?= $i; ?></td>  
                  <td><?= $row["id_mapel"]; ?></td>
                  <td><?= $row["nm_mapel"]; ?></td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
                </tbody>
              </table>
              </section>  
              <!-- akhir menu utama -->
    
    
    </section>
        <!-- js placed at the end of the document so the pages load faster -->
        <script src="../lib/jquery/jquery.min.js"></script>

        <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
        <script class="include" type="text/javascript" src="../lib/jquery.dcjqaccordion.2.7.js"></script>
        <script src="../lib/jquery.scrollTo.min.js"></script>
        <script src="../lib/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="../lib/jquery.sparkline.js"></script>
        <!--common script for all pages-->
        <script src="../lib/common-scripts.js"></script>
        <script type="text/javascript" src="../lib/gritter/js/jquery.gritter.js"></script>
        <script type="text/javascript" src="../lib/gritter-conf.js"></script>
  </body>
  </html>