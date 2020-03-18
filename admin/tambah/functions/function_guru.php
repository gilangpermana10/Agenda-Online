<?php
$host="localhost";
$user="root";
$pass="";
$db="db_agenda";

$koneksi= mysqli_connect($host,$user,$pass,$db);


function tambah($data){
    global $koneksi;
    $id_guru =$data["id_guru"];
    $nm_guru =$data["nm_guru"];

    $query = "INSERT INTO tb_guru
                VALUES
                ('$id_guru','$nm_guru')
                ";

    mysqli_query($koneksi,$query);

    return mysqli_affected_rows($koneksi);
}

?>