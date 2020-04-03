<?php
$host="localhost";
$user="root";
$pass="";
$db="db_agenda";

$koneksi= mysqli_connect($host,$user,$pass,$db);


function query($query) {
	global $koneksi;
	$result = mysqli_query($koneksi, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}



function isi($absen) {
	global $koneksi;

	$ket = htmlspecialchars($absen["keterangan"]);
	$nama = htmlspecialchars($absen["nama"]);
	$tanggal = htmlspecialchars($absen["tanggal"]);



	$query = "INSERT INTO tb_absen
				VALUES
			  ('', '', '', '','', '$nama', '','','$ket','$tanggal')
			";
	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);
}

?>