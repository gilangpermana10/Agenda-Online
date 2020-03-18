<?php

$host="localhost";
$user="root";
$pass="";
$db="db_agenda";

$koneksi= mysqli_connect($host,$user,$pass,$db);


function ubah($data){
    global $koneksi;
    $id_guru =$data["id_guru"];
    $nm_guru =htmlspecialchars($data["nm_guru"]);

    $query = "UPDATE tb_guru SET
                nm_guru = '$nm_guru'
                WHERE id_guru = $id_guru
                ";

    mysqli_query($koneksi,$query);

    return mysqli_affected_rows($koneksi);
}

?>