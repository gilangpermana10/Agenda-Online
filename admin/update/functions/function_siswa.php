<?php
$host="localhost";
$user="root";
$pass="";
$db="db_agenda";

$koneksi= mysqli_connect($host,$user,$pass,$db);


function ubah($data){
    global $koneksi;
    $nis =htmlspecialchars($data["nis"]);
    $nm_siswa =htmlspecialchars($data["nm_siswa"]);
    $Jenis_kelamin =htmlspecialchars($data["Jenis_kelamin"]);
    $Tempat_lahir =htmlspecialchars($data["Tempat_lahir"]);
    $Tanggal_lahir =htmlspecialchars($data["Tanggal_lahir"]);
    $Alamat =htmlspecialchars($data["Alamat"]);
    $No_tlp =htmlspecialchars($data["No_tlp"]);
    $id_kelas =htmlspecialchars($data["id_kelas"]);
    $jurusan =htmlspecialchars($data["jurusan"]);

    $query = "UPDATE tb_siswa SET
                
                nm_siswa = '$nm_siswa',
                Jenis_kelamin ='$Jenis_kelamin',
                Tempat_lahir = '$Tempat_lahir',
                Tanggal_lahir = '$Tanggal_lahir',
                Alamat = '$Alamat',
                No_tlp = '$No_tlp',
                id_kelas = '$id_kelas',
                jurusan = '$jurusan'
                WHERE nis ='$nis'
                ";

    mysqli_query($koneksi,$query);

    return mysqli_affected_rows($koneksi);
}

?>