<?php
$host="localhost";
$user="root";
$pass="";
$db="db_agenda";

$koneksi= mysqli_connect($host,$user,$pass,$db);


function tambah($data){
    global $koneksi;
    $id =$data["id_mapel"];
    $nm =$data["nm_mapel"];

    $query = "INSERT INTO tb_mapel
                VALUES
                ('$id','$nm')
                ";

    mysqli_query($koneksi,$query);

    return mysqli_affected_rows($koneksi);
}

?>