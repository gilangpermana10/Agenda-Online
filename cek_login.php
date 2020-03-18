<?php 

session_start();

require 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];



$login = mysqli_query($koneksi,"SELECT * FROM tb_user WHERE Username='$username' AND password='$password' ");



// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

if($cek > 0){

	$data = mysqli_fetch_assoc($login);


	if($data['rule']=="admin"){

		$_SESSION["masukadmin"] = true;
		$_SESSION['rule'] = "admin";
	
		header("location:admin/index.php");

	
	}else if($data['rule']=="siswa"){
		
		$siswa = query("SELECT * FROM tb_user A 
		INNER JOIN tb_kelas B ON A.id_user = B.id_user")[0];
	
		$_SESSION["masuksiswa"] = true;
		$_SESSION["kd"] = $siswa["id_user"];
		$_SESSION["nm_kelas"] = $siswa["nm_kelas"];
		$_SESSION["gambar"] = $siswa["gambar"];
		
		header("location:index.php");


	}else if($data['rule']=="wali kelas"){
		
		$_SESSION["masukwali"] = true;
		header("location:wali_kelas/index.php");

	}else if($data['rule']=="kepala sekolah"){
		$_SESSION["masukkepala"] = true;
	
		header("location:kepala_sekolah/index.php");
	}else{
	
		header("location:login.php?pesan=gagal");

	}
}else{
	header("location:login.php?pesan=gagal");
}

?>