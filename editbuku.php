<?php 
include('koneksi.php');
include('header.php');
$id = $_GET['id'];
$query = mysqli_query($db,"SELECT * FROM buku WHERE id ='$id'");
$row = mysqli_fetch_assoc($query);
if (isset($_POST['simpan'])) {
	$judul = $_POST['judul'];
	$pengarang = $_POST['pengarang'];
	$penerbit = $_POST['penerbit'];
	$tahun = $_POST['tahun'];
	$isbn = $_POST['isbn'];
	$jumlah = $_POST['jumlah'];
	$lokasi = $_POST['lokasi'];
	$query = mysqli_query($db,"UPDATE buku SET judul='$judul',pengarang='$pengarang',penerbit='$penerbit',tahun='$tahun',isbn='$isbn',Jumlah='$jumlah',lokasi='$lokasi' WHERE id = '$id' ");
	if ($query) {
		echo "<script>
		alert('DATA BUKU BERHASIL DIUPDATE') 
		document.location.href='buku.php'
		</script> ";
	} else {
		echo "<script>
		alert('DATA BUKU GAGAL DIUPDATE')
		</script> ";
	}
}
 ?>
 <div class="col-md-10">
 	<h2><span class="glyphicon glyphicon-plus"></span> EDIT DATA BUKU</h2>
 	<form action="" method="post" enctype="multipart/form-data">
 		<div class="form-group">
 			<label>JUDUL BUKU</label>
 			<input type="text" name="judul" class="form-control" style="width: 500px;" required="" value="<?= $row['judul'] ?>">
 		</div>
 		<div class="form-group">
 			<label>PENGARANG BUKU</label>
 			<input type="text" name="pengarang" class="form-control" style="width: 500px;" required="" value="<?= $row['pengarang'] ?>">
 		</div>
 		<div class="form-group">
 			<label>PENERBIT BUKU</label>
 			<input type="text" name="penerbit" class="form-control" style="width: 500px;" required="" value="<?= $row['penerbit'] ?>">
 		</div>
 		<div class="form-group">
 			<label>TAHUN PEMBUATAN BUKU</label>
 			<input type="text" name="tahun" class="form-control" style="width: 500px;" required="" value="<?= $row['tahun'] ?>">
 		</div>
 		<div class="form-group">
 			<label>ISBN BUKU</label>
 			<input type="text" name="isbn" class="form-control" style="width: 500px;" required="" value="<?= $row['isbn'] ?>">
 		</div>
 		<div class="form-group">
 			<label>JUMLAH BUKU</label>
 			<input type="text" name="jumlah" class="form-control" style="width: 500px;" required="" value="<?= $row['Jumlah'] ?>">
 		</div>
 		<div class="form-group">
 			<label>LOKASI RAK PERPUS</label>
 			<input type="text" name="lokasi" class="form-control" style="width: 500px;" value="<?= $row['lokasi'] ?>">
 		</div>
 		<input type="submit" name="simpan" value="UBAH" class="btn btn-info">
 	</form>
 </div>