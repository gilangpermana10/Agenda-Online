<?php 

include '../function_hapus.php';

$wali_kelas = $_GET["wali_kelas"];

if( hapuswalikelas($wali_kelas) > 0 ) {
	echo "
		<script>
			alert('data berhasil dihapus!');
			document.location.href = '../wali_kelas.php';
		</script>
	";
} else {
	echo "
		<script>
			alert('data gagal dihapus!');
			document.location.href = '../wali_kelas.php';
		</script>
	";
}
?>