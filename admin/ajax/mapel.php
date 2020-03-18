<?php
require '../koneksi.php';

$keyword = $_GET["keyword"];


        $query = "SELECT * FROM tb_mapel
        WHERE
        id_mapel LIKE '%$keyword%' OR
        nm_mapel LIKE '%$keyword%' 
        ";

    $mapel = query($query);


?>
  <table class="table  table-advance table-hover">
    <hr>
    <thead>

      <tr>
        <th>NO </th>
        <th>id Mata Pelajaran</th>
        <th>Nama Mata Pelajaran</th>
        <th></th>
      </tr> 
    </thead>
    <tbody class="text-left">

    <?php $i=1; ?>
    <?php foreach( $mapel as $row ) : ?>      
    <tr>
        <td><?= $i; ?></td>
        <td><?= $row["id_mapel"]; ?></td>
        <td><?= $row["nm_mapel"]; ?></td>
        <td>
          
        <a href="update/update_mapel.php?mapel=<?= $row["id_mapel"]; ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
        <a href="hapus/hapus_mapel.php?mapel=<?= $row["id_mapel"]; ?>" onclick="return confirm('yakin?');"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
        </td>
      </tr>
   <?php $i++ ?>
    <?php endforeach; ?>
     
    </tbody>
  </table>