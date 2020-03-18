<?php
require 'koneksi.php';

function cari($keyword){
    $query = "SELECT * FROM tb_user
    WHERE
    Username LIKE '%$keyword%' OR
    password LIKE '%$keyword%' OR
    rule LIKE '%$keyword%' OR
    id_user LIKE '%$keyword%'
    ";

    return query($query);
}

?>