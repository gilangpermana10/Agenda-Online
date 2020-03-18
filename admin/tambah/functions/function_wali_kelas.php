<?php
$host="localhost";
$user="root";
$pass="";
$db="db_agenda";

$koneksi= mysqli_connect($host,$user,$pass,$db);


function tambah($data){
    global $koneksi;
    $id_wali_kelas =$data["id_wali_kelas"];
    $nm_wali_kelas =$data["nm_wali_kelas"];
    $Kelas =$data["Kelas"];

    $query = "INSERT INTO tb_wali_kelas
                VALUES
                ('$id_wali_kelas','$nm_wali_kelas','$Kelas')
                ";

    mysqli_query($koneksi,$query);

    return mysqli_affected_rows($koneksi);
}

?>