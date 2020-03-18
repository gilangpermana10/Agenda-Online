<?php

session_start();

if( !isset($_SESSION["masukwali"])){
  header("Location:../login.php");
  exit;

}

include("koneksi.php");
         
$data=query("SELECT *
FROM tb_Absen");
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

                <!--header start-->
                <header class="header black-bg">
                  <div class="sidebar-toggle-box">
                    <div class="fa fa-bars tooltips" data-placement="right"></div>
                  </div>
                  <!--logo start-->
                  <a href="index.php" class="logo"><b>E<span>form</span></b></a>
                  <!--logo end-->
                  <section class="nav notify-row" id="top_menu">
                    <!--  notification start -->
                    <ul class="nav top-menu">
                  <div class="top-menu">
                    <ul class="nav pull-right top-menu ">
                    </ul>
                  </div>
                </header>
                <!-- header end -->

    <!-- sidebar start -->

    <aside>
            <div id="sidebar" class="navbar-collapse">

              <!-- sidebar menu start-->

              <ul class="sidebar-menu" id="nav-accordion">
                <p class="centered"><img src="<?= $gambar; ?>" class="img-circle" width="80"></p>
                <h5 class="centered"><?= $nm_kelas;?></h5>
                <li class="sub-menu">
                  <a href="index.php">
                    <i class="fa fa-home"></i>
                    <span>halaman Utama</span>
                    </a>
                </li>

                <li class="sub-menu">
                  <a href="Agenda.php">
                    <i class="fa fa-list-alt"></i>
                    <span>Agenda</span>
                    </a>
                </li>


                <li class="mx">
                    <a class="active" href="Absen.php">
                      <i class="fa fa-pencil-square-o"></i>
                      <span>Absen</span>
                      </a>
                  </li>
                </li>
                    <li class="sub-menu">
                      <a href="Siswa.php">
                        <i class="fa fa-user"></i>
                        <span>Siswa</span>
                        </a>
                    </li>
  
                <!-- <li class="sub-menu">
                  <a href="rekap.php">
                    <i class="fa fa-upload"></i>
                    <span>Rekap</span>
                    </a>
                  <ul class="sub">
                    <li><a href="RAgenda.php"><i class="fa fa-file-text"></i>Agenda</a></li>
                    <li><a href="RAbsen.php"><i class="fa fa-table"></i>Absen</a></li>
                    </ul>
                  </li> -->

                <li class="sub-menu">

                    <a href="../logout.php" onclick="return confirm('Yakin?')">

                    <i class="fa fa-power-off"></i>
                    <span>logout</span>
                    </a>

                </li>

            </div>
          </aside>
    <!-- ssidebar end -->

    <!-- menu utama -->
    <section id="main-content">
    <section class="wrapper turun">
    <div class="form-group">
    <div class="row mb">
    <div class="col-lg-4 main-chart">
                <div class="col-md">
                <input class="form-control fa-align-center" type="text" name="nm_kelas" placeholder="XII Repel06" readonly>
                </div>
            </div> 
        </div>
    <from action="get" class="pull-left mail-src-position">
      <from class="input-append">
      <lable>&emsp;PILIH TANGGAL</label>
      <input class="form" type="date" name="tanggal">
      </from>
    </from>
    </div>
            <table class="table table-bordered table-striped">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Id Kelas</th>
                <th scope="col" >Nama</th>
                <th scope="col" >Keterangan</th>
              </tr>
            <tbody>
                <?php $i=1; ?>
                <?php foreach($data as $row) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $row["id_kelas"]; ?></td>
                    <td><?= $row["nm_siswa"]; ?></td>
                    <td><?= $row["keterangan"];  ?></td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
          </table>
            <div class="from-group">
            <div class="col-lg-4 main-chart">
            <div class="col-md">
            
            <div class="form-group">
            <form action="">
            <label for="">Jumlah</label>
            <input class="form-control" type="text" name="nm_kelas" placeholder="1" readonly>
            
            <label for="">Tidak hadir</label>
            <input class="form-control" type="text" name="nm_kelas" placeholder="1" readonly>
            
            <label for="">Sakit</label>
            <input class="form-control" type="text" name="nm_kelas" placeholder="1" readonly>
            
            <label for="">Izin</label>
            <input class="form-control" type="text" name="nm_kelas" placeholder="1" readonly>
            
            <label for="">Alfa</label>
            <input class="form-control" type="text" name="nm_kelas" placeholder="1" readonly>
            </from>
            </div>
            </div>
            </div>
            </div>
            </selection>
            </selection>
    <!-- akhir menu utama -->
</div>

</form>
    <!-- akhir menu utama -->
</section>
</section>
    <script src="../lib/jquery/jquery.min.js"></script>

    <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="../lib/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../lib/jquery.scrollTo.min.js"></script>

    <script src="../lib/common-scripts.js"></script>
    </body>
    </html>
