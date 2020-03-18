<?php
$host="localhost";
$user="root";
$pass="";
$db="db_agenda";

$koneksi= mysqli_connect($host,$user,$pass,$db);


function ubah($data){
    global $koneksi;
    $id =htmlspecialchars($data["id_mapel"]);
    $nm =htmlspecialchars($data["nm_mapel"]);

    $query = "UPDATE tb_mapel SET
                
                nm_mapel = '$nm'
                WHERE id_mapel = '$id';
                ";

    mysqli_query($koneksi,$query);

    return mysqli_affected_rows($koneksi);
}

?>