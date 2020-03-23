<?php
require '../koneksi.php';

$keyword = $_GET["keyword"];
        $query = "SELECT * FROM tb_kelas
        WHERE
        nm_kelas LIKE '%$keyword%'
        ";

    $data = query($query);
    
    $bulan = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];


?>


<table class="table  table-advance table-hover">
    <hr>
    <thead>

      <tr>
        <th>No</th>
        <th>Bulan</th>
        <th>Kelas</th>
        <th></th>
      </tr>
    
    </thead>
    <tbody class="text-left">
    <?php $i = 1 ;?>
    <?php foreach($data as $rows ) : ?>
    <?php foreach($bulan as $row ) : ?>
    <tr>
        
        <td><?= $i++; ?></td>
        <td><?= $row; ?></td>
    
        <td><?= $rows["nm_kelas"]; ?></td>
        
        <td><a href="lihat_absen.php"><button class="btn btn-primary buleud"><i class="fa fa-eye"></i> LIHAT</button></a>
        
      </tr>
      <?php endforeach; ?>
      <?php endforeach;?>
      

    </tbody>
  </table>