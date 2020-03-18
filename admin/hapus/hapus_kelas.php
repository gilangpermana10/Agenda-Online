<?php 

include '../function_hapus.php';

$kelas = $_GET["kelas"];

if( hapuskelas($kelas) > 0 ) {
	echo "
		<script>
			alert('data berhasil dihapus!');
			document.location.href = '../kelas.php';
		</script>
	";
} else {
	echo "
		<script>
			alert('data gagal dihapus!');
			document.location.href = '../kelas.php';
		</script>
	";
}
?>