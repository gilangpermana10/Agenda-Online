<?php
require 'koneksi.php';

function cari($keyword){
    $query = "SELECT * FROM tb_guru
    WHERE
    id_guru LIKE '%$keyword%' OR
    nm_guru LIKE '%$keyword%' 
    ";

    return query($query);
}
?>