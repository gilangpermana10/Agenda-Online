<?php
session_start();

if( !isset($_SESSION["masukadmin"])){
  header("Location:../login.php");
  exit;

}

include 'koneksi.php';

$kelas = $_GET["kelas"];

$tangg    =date("Y-m-d");

$data = query("SELECT * FROM tb_absen WHERE id_kelas='$kelas' ");

if(isset($_POST['cari'])){
  $tgl = $_POST['tanggal'];
  $data=query("SELECT * FROM tb_absen WHERE tanggal='$tgl'");
}else{
  $data=query("SELECT * FROM tb_absen");
 
}


$bulan = [
    
  ["indo" => "januari",
  "nomor" => "01"
  ],
  
  ["indo" => "februari",
  "nomor" => "02"
  ],
  
  ["indo" => "maret",
  "nomor" => "03"
  ],
  
  ["indo" => "April",
  "nomor" => "04"
  ],
  
  ["indo" => "Mei",
  "nomor" => "05"
  ],
  
  ["indo" => "Juni",
  "nomor" => "06"
  ],
  
  ["indo" => "Juli",
  "nomor" => "07"
  ],
  
  ["indo" => "Agustus",
  "nomor" => "08"
  ],
  
  ["indo" => "September",
  "nomor" => "09"
  ],
  
  ["indo" => "Oktober",
  "nomor" => "10"
  ],
  
  ["indo" => "November",
  "nomor" => "11"
  ],
  
  ["indo" => "Desember",
  "nomor" => "12"
  ],

];




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
            <script src="../lib/jquery/jquery.min.js"></script>
            <script src="js/labsen.js"></script>

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
                <div id="sidebar" class="navbar-brand mb-5 ">
                  
                  <!-- sidebar menu start-->
                  
                  <ul class="sidebar-menu" id="nav-accordion">
                  <p class="centered"><img src="../img/gambar/admin.png" class="img-circle" width="80"></p>
                    <h5 class="centered">
                    
                    ADMIN
      
                    </h5>
                    <li class="mt">
                      <a href="index.php">
                        <i class="fa fa-home"></i>
                        <span>halaman Utama</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                      <a  href="user.php">
                        <i class="fa fa-user"></i>
                        <span>user</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                      <a href="kelas.php">
                        <i class="fa fa-building-o"></i>
                        <span>kelas</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                      <a href="mapel.php">
                        <i class="fa fa-edit"></i>
                        <span>mata pelajaran</span>
                        </a>
                    </li>
                    
                    <li class="sub-menu">
                      <a href="guru.php">
                        <i class="fa fa-group"></i>
                        <span>Guru</span>
                        </a>
                    </li>
                    
                    
                    <li class="sub-menu">
                      <a href="agenda.php">
                        <i class="fa fa-book"></i>
                        <span>Agenda</span>
                        </a>
                    </li>
                    
                    
                    <li class="sub-menu">
                      <a  class="active"  href="absen.php">
                        <i class="fa fa-list-alt"></i>
                        <span>Absen</span>
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
                        <span>wali Kelas</span>
                        </a>
                    </li>
                    
                    <li class="sub-menu ">
                  
                        <a href="../logout.php" onclick="return confirm('Yakin?')"> 
                      
                        <i class="fa fa-power-off"></i>
                        <span>logout</span>
                        </a>
                      
                    </li>
                  
                </div>
              </aside>

              <section id="main-content">
                <section class="wrapper turun">
                <div class="container ">
                   
                    <div class="row text-center">
                    <div class="col-lg-1">
                    <a href="absen.php"><button class="btn btn-danger buleud"><i class="fa fa-arrow-left"></i> KEMBALI</button></a>
                    </div>
                    <div class="col-lg-11">
                    <form action="" method="post">
                          <input type="date" name="tanggal" id="tanggal" class="form btn buleud">
                          &nbsp;
                          <button class="btn btn-info buleud" id="cari" name="cari">CARI</button>
                          &emsp;&emsp;
                          
                    
                    </form>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col">
                    <h2 class="display-2">Absensi Siswa</h2>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col">
                    <hr>
                    <div class="containertab" id=" containertab">
                    
                    <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Absen</th>
                            <th>NIS</th>
                            <th>Nama Siswa</th>
                            <th>ID Kelas</th>
                            <th>Nama Kelas</th>
                            <th>Keterangan</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1 ;?>
                    <?php foreach ($data as $row) :?>
                    <tr>
                            <td><?= $i; ?></td>
                            <td><?= $row["id_absen"]; ?></td>
                            <td><?= $row["nis"]; ?></td>
                            <td><?= $row["nm_siswa"]; ?></td>
                            <td><?= $row["id_kelas"]; ?></td>
                            <td><?= $row["nm_kelas"]; ?></td>
                            <td><?= $row["keterangan"]; ?></td>
                            
                        </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                    </tbody>
              </table>
              </div>
              <hr>
                      
                        </div>
                        </div>
                        </div>
              </section>

        
</section>
      <!-- akhir menu utama -->
    
    
    </section>
        <!-- js placed at the end of the document so the pages load faster -->
       

        <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
        <script class="include" type="text/javascript" src="../lib/jquery.dcjqaccordion.2.7.js"></script>
        <script src="../lib/jquery.scrollTo.min.js"></script>
        <script src="../lib/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="../lib/jquery.sparkline.js"></script>
        <!--common script for all pages-->
        <script src="../lib/common-scripts.js"></script>
        <script type="../text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
        <script type="../text/javascript" src="lib/gritter-conf.js"></script>
  </body>
  </html>