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


function isi($data) {
	global $koneksi;

	$nama = htmlspecialchars($data["nama"]);
	$ket = htmlspecialchars($data["ket"]);
	$id_kelas = htmlspecialchars($data["id_kelas"]);
	$nm_kelas = htmlspecialchars($data["nm_kelas"]);
	$tangg = htmlspecialchars($data["tanggal"]);
	$nis = htmlspecialchars($data["nis"]);
	$ket = htmlspecialchars($data["ket"]);

	$query = "INSERT IGNORE INTO tb_absen
				VALUES
			  ('', '$nis', '$nama', '$nm_kelas', '$ket', '$tangg', '$id_kelas')
			";
	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);
}


?>
