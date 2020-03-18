<?php
require 'koneksi.php';

function cari($keyword){
    $query = "SELECT * FROM tb_kelas
    WHERE
    nm_kelas LIKE '%$keyword%' OR
    id_kelas LIKE '%$keyword%' OR
    gambar LIKE '%$keyword%' OR
    id_user LIKE '%$keyword%' OR
    jumlah_siswa LIKE '%$keyword%' 
    ";

    return query($query);
}

?>