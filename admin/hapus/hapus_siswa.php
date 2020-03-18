<?php 

include '../function_hapus.php';

$siswa = $_GET["siswa"];

if( hapussiswa($siswa) > 0 ) {
	echo "
		<script>
			alert('data berhasil dihapus!');
			document.location.href = '../siswa.php';
		</script>
	";
} else {
	echo "
		<script>
			alert('data gagal dihapus!');
			document.location.href = '../siswa.php';
		</script>
	";
}
?>