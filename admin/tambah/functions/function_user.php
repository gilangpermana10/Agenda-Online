<?php
$host="localhost";
$user="root";
$pass="";
$db="db_agenda";

$koneksi= mysqli_connect($host,$user,$pass,$db);


function tambah($data){
    global $koneksi;
    $Username =$data["Username"];
    $password =$data["password"];
    $rule =$data["rule"];
    $id_user =$data["id_user"];

    $query = "INSERT INTO tb_user
                VALUES
                ('$Username','$password','$rule','$id_user')
                ";

    mysqli_query($koneksi,$query);

    return mysqli_affected_rows($koneksi);
}

?>