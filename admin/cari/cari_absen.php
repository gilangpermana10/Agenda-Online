<?php
require 'koneksi.php';

function cari($keyword){
    $query = "SELECT * FROM tb_kelas
    WHERE
    nm_kelas LIKE '%$keyword%' 
    ";

    return query($query);
}
?>