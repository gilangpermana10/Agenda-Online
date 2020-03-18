<?php 

include '../function_hapus.php';

$mapel = $_GET["mapel"];

if( hapusmapel($mapel) > 0 ) {
	echo "
		<script>
			alert('data berhasil dihapus!');
			document.location.href = '../mapel.php';
		</script>
	";
} else {
	echo "
		<script>
			alert('data gagal dihapus!');
			document.location.href = '../mapel.php';
		</script>
	";
}
?>