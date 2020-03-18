<?php

  session_start();
  if( !isset($_SESSION["masuksiswa"])){
    header("Location:login.php");
    exit;

}


include 'koneksi.php';

$tangg    =date("Y-m-d");

$data=query("SELECT * FROM tb_absen where tanggal='$tangg'");

if(isset($_GET['tanggal'])){
  $tgl = $_GET['tanggal'];
  $data=query("SELECT * FROM tb_absen WHERE tanggal='$tgl'");
}else{
  $data=query("SELECT * FROM tb_absen where tanggal='$tangg'");
 
}

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
                <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        
                <!--external css-->
                <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
                <!-- Custom styles for this template -->
                <link href="css/style.css" rel="stylesheet">
                <link href="css/style-responsive.css" rel="stylesheet">
        
              </head>
              <body>
           
            
                    <!--header start-->
                    <header class="header black-bg">
                      <div class="sidebar-toggle-box">
                        <div class="fa fa-bars tooltips" data-placement="right" ></div>
                      </div>
                      <!--logo start-->
                      <a href="index.php" class="logo"><b>E<span>form</span></b></a>
                      <!--logo end-->
                      <div class="nav notify-row" id="top_menu">
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
                    <p class="centered"><img src="img/gambar/<?= $gambar; ?>" class="img-circle" width="80"></p>
  
                    <h5 class="centered"><?= $nm_kelas;?></h5>
                    <li class="sub-menu">
                      <a href="index.php">
                        <i class="fa fa-home"></i>
                        <span>halaman Utama</span>
                        </a>
                    </li>
                    
                    <li class="sub-menu">
                      <a   href="isiAgenda.php">
                        <i class="fa fa-list-alt"></i>
                        <span>Isi Agenda</span>
                        </a>
                    </li>
    
                    
                    <li class="sub-menu">
                        <a href="isiAbsen.php">
                          <i class="fa fa-building-o"></i>
                          <span>Isi Absen</span>
                          </a>
                      </li>

                  
                    <li class="mx">
                      <a class="active" href="rekap.php">
                        <i class="fa fa-upload"></i>
                        <span>Rekap</span>
                        </a>
                      <ul class="sub-menu">
                        <li><a  href="RAgenda.php"><i class="fa fa-file-text"></i>Agenda</a></li>
                        <li><a class="hanap" href="RAbsen.php"><i class="fa fa-table"></i>Absen</a></li>
                        </ul>
                      </li>
                    
                    <li class="sub-menu">
                  
                        <a href="logout.php" onclick="return confirm('Yakin?')"> 
                      
                        <i class="fa fa-power-off"></i>
                        <span>logout</span>
                        </a>
                      
                    </li>
                  
                </div>
              </aside>
        <!-- ssidebar end -->

        <!-- main content start -->
        <section id="main-content">
            <section class="wrapper">
       
        <div class="row turun">
            <div class="col-lg-5 main-chart">
                <div class="col-md"> 
                    <div class="control-group">
                    
                            <div class="form-group">
                            <form method="get">
                              <label>PILIH TANGGAL</label>
                              <input class="form" type="date" name="tanggal">
                              <input class="form" type="submit" value="FILTER">
                            </form>
                                    
                                    
                                </select>
                            </div>
                    </div>
                </div>
            </div>
        </div>
      <!-- table mulai -->
        <table class="table table-hover">
            <thead>            
              <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Ket.</th>
              </tr>
            </thead>

            <tbody>
            <?php $i = 1; ?>
	          <?php foreach( $data as $row ) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $row["nm_siswa"]; ?></td>
                    <td>
          
                      <input class="form-control" type="text" name="ket" placeholder="<?= $row["keterangan"];?>" readonly>
           
                    </td>
                  </tr>
                  <?php $i++; ?>
              <?php endforeach; ?>
            
            </tbody>
            </table>
<!-- table akhir -->



<!-- akhir button -->
        </section>
        </section>

        <!-- end main content -->

 <!-- js placed at the end of the document so the pages load faster -->
 <script src="lib/jquery/jquery.min.js"></script>

 <script src="lib/bootstrap/js/bootstrap.min.js"></script>
 <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
 <script src="lib/jquery.scrollTo.min.js"></script>

 <script src="lib/common-scripts.js"></script>

</body>
</html>