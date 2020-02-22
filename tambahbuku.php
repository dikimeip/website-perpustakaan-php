<?php 
include('koneksi.php');
include('header.php');
if (isset($_POST['simpan'])) {
	$judul = $_POST['judul'];
	$pengarang = $_POST['pengarang'];
	$penerbit = $_POST['penerbit'];
	$tahun = $_POST['tahun'];
	$isbn = $_POST['isbn'];
	$jumlah = $_POST['jumlah'];
	$lokasi = $_POST['lokasi'];
	$tanggal = date('d/m/y');
	$namafoto = $_FILES['foto']['name'];
	$source = $_FILES['foto']['tmp_name'];
	$lok = './img/';
	move_uploaded_file($source, $lok.$namafoto);
	$query = mysqli_query($db,"INSERT INTO buku VALUES (NULL,'$judul','$pengarang','$penerbit','$tahun','$isbn','$jumlah','$lokasi','$tanggal','$namafoto') ");
		if ($query) {
			echo "<script>
				alert('DATA BUKU BERHASIL DISIMPAN')
				document.location.href='buku.php'
				</script> ";
		} else {
			echo "<script>
				alert('DATA BUKU GAGAL DISIMPAN')
				</script> ";
		}
}
 ?>
 <div class="col-md-10">
 	<h2><span class="glyphicon glyphicon-plus"></span> TAMBAH DATA BUKU</h2>
 	<form action="" method="post" enctype="multipart/form-data">
 		<div class="form-group">
 			<label>JUDUL BUKU</label>
 			<input type="text" name="judul" class="form-control" style="width: 500px;" required="">
 		</div>
 		<div class="form-group">
 			<label>PENGARANG BUKU</label>
 			<input type="text" name="pengarang" class="form-control" style="width: 500px;" required="">
 		</div>
 		<div class="form-group">
 			<label>PENERBIT BUKU</label>
 			<input type="text" name="penerbit" class="form-control" style="width: 500px;" required="">
 		</div>
 		<div class="form-group">
 			<label>TAHUN PEMBUATAN BUKU</label>
 			<input type="text" name="tahun" class="form-control" style="width: 500px;" required="">
 		</div>
 		<div class="form-group">
 			<label>ISBN BUKU</label>
 			<input type="text" name="isbn" class="form-control" style="width: 500px;" required="">
 		</div>
 		<div class="form-group">
 			<label>JUMLAH BUKU</label>
 			<input type="text" name="jumlah" class="form-control" style="width: 500px;" required="">
 		</div>
 		<div class="form-group">
 			<label>LOKASI RAK PERPUS</label>
 			<input type="text" name="lokasi" class="form-control" style="width: 500px;">
 		</div>
 		<div class="form-group">
 			<label>FOTO BUKU</label>
 			<input type="file" name="foto" class="form-control" style="width: 500px;" required="">
 		</div>
 		<input type="submit" name="simpan" value="SIMPAN" class="btn btn-info">
 	</form>
 </div>