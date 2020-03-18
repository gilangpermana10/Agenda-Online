<?php 

include '../function_hapus.php';

$guru = $_GET["guru"];

if( hapusguru($guru) > 0 ) {
	echo "
		<script>
			alert('data berhasil dihapus!');
			document.location.href = '../guru.php';
		</script>
	";
} else {
	echo "
		<script>
			alert('data gagal dihapus!');
			document.location.href = '../guru.php';
		</script>
	";
}
?>