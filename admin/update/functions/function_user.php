<?php
$host="localhost";
$user="root";
$pass="";
$db="db_agenda";

$koneksi= mysqli_connect($host,$user,$pass,$db);


function ubah($data){
    global $koneksi;
    $Username =htmlspecialchars($data["Username"]);
    $password =htmlspecialchars($data["password"]);
    $rule =htmlspecialchars($data["rule"]);
    $id_user =$data["id_user"];

    $query = "UPDATE tb_user SET
                Username = '$Username',
                password = '$password',
                rule = '$rule'
                WHERE id_user = '$id_user'
                ";

    mysqli_query($koneksi,$query);

    return mysqli_affected_rows($koneksi);
}

?>