<?php 
include('koneksi.php');
$id = $_GET['id'];
$query = mysqli_query($db,"DELETE FROM buku WHERE id = '$id'");
if ($query) {
	echo "<script>
	alert('DATA BUKU DIHAPUS')
	document.location.href='buku.php'
	</script> ";
} else {
	echo "<script>
	alert('DATA BUKU GAGAL DIHAPUS')
	</script> ";
}
?>

