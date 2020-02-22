<?php 
include('koneksi.php');
$id = $_GET['id'];
$query = mysqli_query($db,"DELETE FROM anggota WHERE id = '$id' ");
if ($query) {
	echo "<script>
		alert('ANGGOTA BERHASIL DIHAPUS')
		document.location.href='anggota.php'
		</script> ";
} else {
	echo "<script>
		alert('ANGGOTA GAGAL DIHAPUS')
		document.location.href='anggota.php'
		</script> ";
}

 ?>