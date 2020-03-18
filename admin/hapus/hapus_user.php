<?php 

include '../function_hapus.php';

$id = $_GET["id_user"];

if( hapususer($id) > 0 ) {
	echo "
		<script>
			alert('data berhasil dihapus!');
			document.location.href = '../user.php';
		</script>
	";
} else {
	echo "
		<script>
			alert('data gagal dihapus!');
			document.location.href = '../user.php';
		</script>
	";
}
?>