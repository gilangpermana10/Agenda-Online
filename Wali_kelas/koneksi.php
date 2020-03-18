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

function tambah($data) {
	global $koneksi;

	$guru = htmlspecialchars($data["nm_guru"]);
	$kelas = htmlspecialchars($data["nm_kelas"]);
	$mapel = htmlspecialchars($data["mapel"]);
	$materi = htmlspecialchars($data["materi"]);
	$tugas = htmlspecialchars($data["tugas"]);
	$jam = htmlspecialchars($data["jam_ke"]);
	$ket = htmlspecialchars($data["ket"]);
	$date = date("Y-m-d");

	$query = "INSERT INTO tb_agenda A
	RIGHT OUTER JOIN tb_kelas B ON A.kd_kelas = B.kd_kelas
	RIGHT OUTER JOIN tb_mapel C ON A.id_mapel = C.id_mapel
	RIGHT OUTER JOIN tb_guru D ON A.id_guru = D.id_guru
	RIGHT OUTER JOIN tb_login E ON A.id_user = D.id_user
				VALUES
			  ('', '', '', '$kelas','','', '$mapel', '$jam','$materi','$tugas','','$guru','$date','')
			";
	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);
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


function hapus($id) {
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM tb_agenda WHERE id = $id");
	return mysqli_affected_rows($koneksi);
}


?>
