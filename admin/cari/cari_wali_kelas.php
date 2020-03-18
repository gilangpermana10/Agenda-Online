<?php
require 'koneksi.php';

function cari($keyword){
    $query = "SELECT * FROM tb_wali_kelas
    WHERE
    id_wali_kelas LIKE '%$keyword%' OR
    nm_wali_kelas LIKE '%$keyword%' OR
    Kelas LIKE '%$keyword%'  
    ";

    return query($query);
}

?>