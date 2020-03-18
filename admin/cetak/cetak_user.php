<?php
require_once __DIR__ . '/../vendor/autoload.php';

include '../koneksi.php';
         
$data=query("SELECT * FROM tb_user");

$mpdf = new \Mpdf\Mpdf();

$html = '
<!DOCTYPE html>
<html lang="en">

<head>
  
  <title>EFORM</title>

</head>
<h2>Daftar User</h2>
<table border="1" cellpadding="10" cellspacing="0">
      <hr>
      <thead>
        <tr>
          <th>NO </th>
          <th> Username </th>
          <th> Password</th>
          <th> Rule</th>
          <th> Id user</th>
        </tr>
      </thead>
      <tbody class="text-left">';

       $i = 1;
    foreach( $data as $row ){
        $html .=' <tr>
      
          <td>'. $i++ .'</td>
          <td>'. $row["Username"].'</td>
          <td>'. $row["password"].'</td>
          <td><span class="label label-info label-mini">'. $row["rule"].'</span></td>
          <td>'. $row["id_user"].'</td>
          
        </tr>';
      }
         
     $html .=' </tbody>
    </table>
    </body>
    </html>
    ';

$mpdf->WriteHTML($html);
$mpdf->Output('daftar-mahasiswa.pdf', 'I');

?>