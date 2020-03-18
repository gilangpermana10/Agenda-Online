<?php
          session_start();
          if( !isset($_SESSION["masukadmin"])){
            header("Location:../login.php");
            exit;

        }

         include 'cari/cari_kelas.php';
         
          $kelas=query("SELECT * FROM tb_kelas");

          if(isset($_POST["cari"])){
            $kelas = cari($_POST["keyword"]);
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

            <script src="../lib/jquery/jquery.min.js"></script>
            <script src="js/kelas.js"></script>

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
                      <a href="user.php">
                        <i class="fa fa-user"></i>
                        <span>user</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                      <a class="active" href="kelas.php">
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
                      <a href="absen.php">
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
                <section class="wrapper turun  text-center">

                <div class="row">

<div class="col-lg-12 ">
        <div class="control-group">
        
                <div class="form-group">
                <form method="post" action="">
                  <label>Cari Kelas </label>
                  <input class="form  btn buleud" type="text" id="keyword" name="keyword" autocomplete="off">
                  <button class="form btn btn-info buleud" type="submit" id="cari" name="cari"><i class="fa fa-search"></i> CARI </button>
                </form>
                </div>
        </div>
</div>

</div>
<div class="row">
<div class="col-sm-12">
<h2 class="dispay-2  text-left">Daftar Kelas</h2>
<div id="containertab">
<table class="table  table-advance table-hover ">
    <hr>
    <thead>
      <tr>
        <th>NO </th>
        <th>id User</th>
        <th>Nama Kelas</th>
        <th>Id Kelas</th>
        <th>gambar</th>
        <th>jumlah siswa</th>
        <th></th>
      </tr>
    </thead>
    <tbody class="text-left">
      
    <?php $i=1; ?>
    <?php foreach( $kelas as $row ) : ?>
    <tr>
        <td><?= $i ?></td>
        
        <td><?= $row["id_user"]; ?></td>
        <td><?= $row["nm_kelas"]; ?></td>
        <td><?= $row["id_kelas"]; ?></td>
        <td><img src="../img/gambar/<?= $row["gambar"]; ?>" alt="<?= $row["gambar"]; ?>" width="50px"></td>
        <td><?= $row["jumlah_siswa"]; ?></td> 
        <td>
          
          <a href="update/update_kelas.php?kelas=<?= $row["id_kelas"]; ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
          <a href="hapus/hapus_kelas.php?kelas=<?= $row["id_kelas"]; ?>" onclick="return confirm('yakin?');"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
        </td>
      </tr>
      <?php $i++; ?>
    <?php endforeach;?>
    </tbody>
  </table>
  </div>
  <hr>

  <a href="tambah/tambah_kelas.php"><button class="btn btn-success buleud"><i class="fa fa-plus"></i> Tambah</button></a>
  <button class="btn btn-info buleud" type="submit"><i class="fa fa-print"></i> PRINT</button>
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