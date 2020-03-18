<?php
$host="localhost";
$user="root";
$pass="";
$db="db_agenda";

$koneksi= mysqli_connect($host,$user,$pass,$db);


function tambah($data){
    global $koneksi;
    $nis =$data["nis"];
    $nm_siswa =$data["nm_siswa"];
    $Jenis_kelamin =$data["Jenis_kelamin"];
    $Tempat_lahir =$data["Tempat_lahir"];
    $Tanggal_lahir =$data["Tanggal_lahir"];
    $Alamat =$data["Alamat"];
    $No_tlp =$data["No_tlp"];
    $id_kelas =$data["id_kelas"];
    $jurusan =$data["jurusan"];

    $query = "INSERT INTO tb_siswa
                VALUES
                ('$nis','$nm_siswa','$Jenis_kelamin','$Tempat_lahir','$Tanggal_lahir','$Alamat','$No_tlp','$id_kelas','$jurusan')
                ";

    mysqli_query($koneksi,$query);

    return mysqli_affected_rows($koneksi);
}

?>