<?php
require '../koneksi.php';

$keyword = $_GET["keyword"];


        $query = "SELECT * FROM tb_wali_kelas
        WHERE
        id_wali_kelas LIKE '%$keyword%' OR
        nm_wali_kelas LIKE '%$keyword%' OR
        Kelas LIKE '%$keyword%'  
        ";

    $wali_kelas = query($query);


?>
 <table class="table  table-advance table-hover">
    <hr>
    <thead>
      <tr>
        <th>NO </th>
        <th> ID Wali Kelas </th>
        <th> Nama Wali Kelas</th>
        <th> Nama Kelas</th>
        <th></th>
      </tr>
    </thead>
    <tbody class="text-left">
      
      <?php $i=1;?>
      <?php foreach( $wali_kelas as $row ) : ?>
    <tr>
        <td><?= $i;?></td>
        <td><?= $row["id_wali_kelas"]; ?></td>
        <td><?= $row["nm_wali_kelas"]; ?></td>
        <td><?= $row["kelas"]; ?></td>
        <td>
          
          <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
          <a href="hapus/hapus_wali_kelas.php?wali_kelas=<?= $row["id_wali_kelas"]; ?>" onclick="return confirm('yakin?');"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
        </td>
      </tr>

    <?php $i++; ?>
    <?php endforeach; ?>
    </tbody>
  </table>