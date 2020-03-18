<?php
require '../koneksi.php';

$keyword = $_GET["keyword"];

$query = "SELECT * FROM tb_kelas
    WHERE
    nm_kelas LIKE '%$keyword%' OR
    id_kelas LIKE '%$keyword%' OR
    gambar LIKE '%$keyword%' OR
    id_user LIKE '%$keyword%' OR
    jumlah_siswa LIKE '%$keyword%' 
    ";
        

    $kelas = query($query);


?>
  <table class="table  table-advance table-hover">
    <hr>
    <thead>
      <tr>
        <th>NO </th>
        <th>id User</th>
        <th>Nama Kelas</th>
        <th>Id Kelas</th>
        <th>gambar</th>
        <th>jumlah siswa</th>
        <th></th>
      </tr>
    </thead>
    <tbody class="text-left">
      
    <?php $i=1; ?>
    <?php foreach( $kelas as $row ) : ?>
    <tr>
        <td><?= $i ?></td>
        
        <td><?= $row["id_user"]; ?></td>
        <td><?= $row["nm_kelas"]; ?></td>
        <td><?= $row["id_kelas"]; ?></td>
        <td><?= $row["gambar"]; ?></td>
        <td><?= $row["jumlah_siswa"]; ?></td> 
        <td>
          
          <a href="update/update_kelas.php?kelas=<?= $row["id_kelas"]; ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
          <a href="hapus/hapus_kelas.php?kelas=<?= $row["id_kelas"]; ?>" onclick="return confirm('yakin?');"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
        </td>
      </tr>
      <?php $i++; ?>
    <?php endforeach;?>
    </tbody>
  </table>