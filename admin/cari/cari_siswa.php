<?php
require 'koneksi.php';

function cari($keyword){
    $query = "SELECT * FROM tb_siswa
    WHERE
    nis LIKE '%$keyword%' OR
    nm_siswa LIKE '%$keyword%' OR
    Jenis_kelamin LIKE '%$keyword%' OR
    Tempat_lahir LIKE '%$keyword%' OR
    Tanggal_lahir LIKE '%$keyword%' OR
    Alamat LIKE '%$keyword%' OR
    id_kelas LIKE '%$keyword%' OR
    jurusan LIKE '%$keyword%' OR
    No_tlp LIKE '%$keyword%' 
    ";

    return query($query);
}

?>