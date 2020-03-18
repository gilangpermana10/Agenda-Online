<?php
require '../koneksi.php';

$keyword = $_GET["keyword"];


          $query = "SELECT * FROM tb_siswa
          WHERE
          nis LIKE '%$keyword%' OR
          nm_siswa LIKE '%$keyword%' OR
          Jenis_kelamin LIKE '%$keyword%' OR
          Tempat_lahir LIKE '%$keyword%' OR
          Tanggal_lahir LIKE '%$keyword%' OR
          Alamat LIKE '%$keyword%' OR
          id_kelas LIKE '%$keyword%' OR
          jurusan LIKE '%$keyword%' OR
          No_tlp LIKE '%$keyword%' 
          ";

    $siswa = query($query);


?>
 <table class="table  table-advance table-hover">
    <hr>
    <thead>
      <tr>
        <th>NO </th>
        <th> NIS </th>
        <th> Nama Siswa</th>
        <th> Jenis Kelamin</th>
        <th> TTL</th>
        <th> Alamat</th>
        <th> No. Telp</th>
        <th> Kode Kelas</th>
        <th> Jurusan</th>
        <th></th>
      </tr>
    </thead>
    <tbody class="text-left">
      
    <?php $i=1; ?>
    <?php foreach( $siswa as $row ) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td><?= $row["nis"]; ?></td>
        <td><?= $row["nm_siswa"]; ?></td>
        <td><?= $row["Jenis_kelamin"]; ?></td>
        <td><?= $row["Tempat_lahir"]; ?>,<?= $row["Tanggal_lahir"]; ?></td>
        <td><?= $row["Alamat"]; ?></td>
        <td><?= $row["No_tlp"]; ?></td>
        <td><?= $row["id_kelas"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
        <td>
          
          <a href="update/update_siswa.php?siswa=<?= $row["nis"]; ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
          <a href="hapus/hapus_siswa.php?siswa=<?= $row["nis"]; ?>" onclick="return confirm('yakin?');"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
        </td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
    </tbody>
  </table>