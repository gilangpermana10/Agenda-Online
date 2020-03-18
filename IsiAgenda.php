<?php
  session_start();
  if( !isset($_SESSION["masuksiswa"])){
    header("Location:login.php");
    exit;

}

require 'koneksi.php';



if( isset($_POST["submit"]) ) {

    // cek apakah data berhasil di tambahkan atau tidak
	if( tambah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'RAgenda.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'IsiAgenda.php';
			</script>
		";
	}


}


$mapel=query("SELECT * FROM tb_mapel");
$guru=query("SELECT * FROM tb_guru");

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
                <p class="centered"><img src="img/gambar/<?= $gambar;?>" class="img-circle" width="80"></p>
                <h5 class="centered"><?= $nm_kelas; ?></h5>
                <li class="sub-menu">
                  <a href="index.php">
                    <i class="fa fa-home"></i>
                    <span>halaman Utama</span>
                    </a>
                </li>


                <li class="mx">
                  <a  class="active" href="isiAgenda.php">
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

                <li class="sub-menu">
                  <a href="rekap.php">
                    <i class="fa fa-upload"></i>
                    <span>Rekap</span>
                    </a>
                  <ul class="sub">
                    <li><a href="RAgenda.php"><i class="fa fa-file-text"></i>Agenda</a></li>
                    <li><a href="RAbsen.php"><i class="fa fa-table"></i>Absen</a></li>
                    </ul>
                  </li>

                <li class="sub-menu">

                    <a  href="logout.php" onclick="return confirm('Yakin?')">

                    <i class="fa fa-power-off"></i>
                    <span>logout</span>
                    </a>

                </li>

            </div>
          </aside>
    <!-- ssidebar end -->
    <!-- formulir start -->
    <section id="main-content">
    <section class="wrapper">
    <form method="post" action="">
<!-- kelas start-->


<div class="row">
            <div class="turun">
            <div class="col-lg-5 main-chart">
                <div class="col-md">
                <input class="form-control fa-align-center" type="text" name="nm_kelas" placeholder="<?= $nm_kelas;?>" readonly>
                </div>
            </div>
            </div>
        </div>



<!-- kelas end -->

<!-- tanggal start -->


<!-- tanggal end -->

<!-- pilih guru start -->

            <div class="row">
                <div class="col-lg-5 main-chart">
                    <div class="col-md mb-2" >
                        <div class="control-group">

                                <div class="form-group">
                                    <label for="PilihGuru">Pilih guru</label>
                                    <select class="form-control" id="nm_guru" name="nm_guru">
                                        <option>-</option>
                                        <?php $i = 1; ?>
	                                            <?php foreach( $guru as $row ) : ?>

                                                 <option><?= $row["nm_guru"]; ?></option>
                                                <?php endforeach; ?>
                                            <? $i++; ?>

                                    </select>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

<!-- pilih guru end -->

<!-- mapel start -->



        <div class="row">
            <div class="col-lg-5 main-chart">
                <div class="col-md">
                    <div class="control-group">

                            <div class="form-group">
                                <label for="Mata pelajaran">mata pelajaran</label>
                                <select class="form-control" id="pilihMapel" name="mapel">
                                <option>-</option>
                                <?php $i = 1; ?>
	                                <?php foreach( $mapel as $row ) : ?>

                                    <option><?= $row["nm_mapel"]; ?></option>
                                    <?php endforeach; ?>
                                <? $i++; ?>
                                </select>
                        </div>

                    </div>
                </div>
            </div>
        </div>


<!-- mapel end -->

<!-- jam start -->


        <div class="row">
            <div class="col-lg-5 main-chart">
                <div class="col-md">
                    <div class="control-group">

                            <div class="form-group">
                                <label for="jam">Jam Ke</label>
                                <select class="form-control" id="pilihjam" name="jam_ke">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                    </div>
                </div>
            </div>
        </div>


<!-- jam end -->
<!-- Materi Start -->



        <div class="row">
            <div class="col-lg-5 main-chart">
                <div class="col-md">
                    <div class="control-group">

                        <div class="form-group">
                            <label for="Meteri">Materi Pembelajaran</label>
                            <textarea class="form-control" id="materi" rows="3" name="materi"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- materi end -->

<!-- Tugas start -->

        <div class="row">
            <div class="col-lg-5 main-chart">
                <div class="col-md">
                    <div class="control-group">

                        <div class="form-group">
                            <label for="Tugas">Tugas</label>
                            <textarea class="form-control"  id="tugas" rows="3" name="tugas"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- Tugas end -->

<!-- ket start -->



        <div class="row">
            <div class="col-lg-5 main-chart">
                <div class="col-md">
                    <div class="control-group">

                            <div class="form-group">
                                <label for="ket">keterangan</label>
                                <select class="form-control" id="pilihjam" name="ket">
                                    <option>-</option>
                                    <option>Hadir</option>
                                    <option>Tidak Hadir</option>
                                </select>
                            </div>
                    </div>
                </div>
            </div>
        </div>


<!-- ket end -->
<!-- tombol -->

        <div class="row ">
            <div class="col-lg-5 main-chart">
                <div class="col-xs">
                    <div class="control-group">
                       <button class="btn btn-info btn-lg btn-block btn-round" type="submit" name="submit" onclick="return confirm('Yakin?')">kirim data</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
</section>
<!-- tombol -->
    <!-- Formulir end  -->
</section>

   <!-- js placed at the end of the document so the pages load faster -->
   <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>

  <script src="lib/common-scripts.js"></script>

 </body>
</html>
