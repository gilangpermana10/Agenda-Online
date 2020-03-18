<?php
require '../koneksi.php';

$keyword = $_GET["keyword"];


    $query = "SELECT * FROM tb_user
    WHERE
    Username LIKE '%$keyword%' OR
    password LIKE '%$keyword%' OR
    rule LIKE '%$keyword%' OR
    id_user LIKE '%$keyword%'
    ";

    $data = query($query);


?>
  <table class="table  table-advance table-hover">
                <hr>
                <thead>
                  <tr>
                    <th>NO </th>
                    <th> Username </th>
                    <th> Password</th>
                    <th> Rule</th>
                    <th> Id user</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody class="text-left">
                <?php $i = 1; ?>
                <?php foreach( $data as $row ) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $row["Username"]; ?></td>
                    <td><?= $row["password"]; ?></td>
                    <td><span class="label label-info label-mini"><?= $row["rule"]; ?></span></td>
                    <td><?= $row["id_user"]; ?></td>
                    <td>
                      
                    <a href="update/update_user.php?id_user=<?= $row["id_user"]; ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                      <a href="hapus/hapus_user.php?id_user=<?= $row["id_user"]; ?>" onclick="return confirm('yakin?');"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                    </td>
                    
                  </tr>
                  <?php $i++; ?>
                  <?php endforeach; ?>
                   
                </tbody>
              </table>