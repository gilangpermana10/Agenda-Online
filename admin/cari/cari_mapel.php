<?php
require 'koneksi.php';

function cari($keyword){
    $query = "SELECT * FROM tb_mapel
    WHERE
    id_mapel LIKE '%$keyword%' OR
    nm_mapel LIKE '%$keyword%' 
    ";

    return query($query);
}

?>