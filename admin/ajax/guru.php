<?php
require '../koneksi.php';

$keyword = $_GET["keyword"];


        $query = "SELECT * FROM tb_guru
        WHERE
        id_guru LIKE '%$keyword%' OR
        nm_guru LIKE '%$keyword%' 
        ";
    $guru = query($query);


?>

 <table class="table  table-advance table-hover">
    <hr>
    <thead>
      <tr>
        <th>NO </th>
        <th>id Guru</th>
        <th>Nama Guru</th>
        <th></th>
      </tr>
    </thead>
    <tbody class="text-left">
      
    <?php $i=1; ?>
    <?php foreach( $guru as $row ) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td><?= $row["id_guru"]; ?></td>
        <td><?= $row["nm_guru"]; ?></td>
        <td>
          
          <a href="update/update_guru.php?guru=<?= $row["id_guru"]; ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
          <a href="hapus/hapus_guru.php?guru=<?= $row["id_guru"]; ?>" onclick="return confirm('yakin?');"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
        </td>
      </tr>
      <?php $i++; ?>
      <?php endforeach;?>

    </tbody>
  </table