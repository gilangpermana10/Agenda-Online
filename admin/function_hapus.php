<?php

$host="localhost";
$user="root";
$pass="";
$db="db_agenda";

$koneksi= mysqli_connect($host,$user,$pass,$db);


function hapususer($id_user) {
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM tb_user WHERE id_user = $id_user");
	return mysqli_affected_rows($koneksi);
}

function hapuskelas($kelas) {
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM tb_kelas WHERE id_kelas = $kelas");
	return mysqli_affected_rows($koneksi);
}

function hapusmapel($mapel) {
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM tb_mapel WHERE id_mapel = $mapel");
	return mysqli_affected_rows($koneksi);
}

function hapusguru($guru) {
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM tb_guru WHERE id_guru = $guru");
	return mysqli_affected_rows($koneksi);
}

function hapuswalikelas($wali_kelas) {
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM tb_wali_kelas WHERE id_wali_kelas = $wali_kelas");
	return mysqli_affected_rows($koneksi);
}

function hapussiswa($siswa) {
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM tb_siswa WHERE nis = $siswa");
	return mysqli_affected_rows($koneksi);
}

?>