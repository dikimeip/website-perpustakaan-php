<?php 
include('header.php');
include('koneksi.php');
if (isset($_POST['simpan'])) {
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$semester = $_POST['semester'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$fak = $_POST['fak'];
	$aktif = date('d/m/y');
	$namafoto = $_FILES['foto']['name'];
	$source = $_FILES['foto']['tmp_name'];
	$lokasi = './img/';
	move_uploaded_file($source, $lokasi.$namafoto);
	$query = mysqli_query($db,"INSERT INTO anggota VALUES (NULL,'$nim','$nama','$semester','$tanggal_lahir','$fak','$aktif','$namafoto') ");
	if ($query) {
		echo "<script>
			alert ('ANGGOTA BERHASIL DITAMBAHKAN')
			document.location.href = 'anggota.php' 
			</script> ";
	} else {
		echo "<script>
			alert ('ANGGOTA GAGAL DITAMBAHKAN')
			</script> ";
	}
}
 ?>
 <div class="col-md-10">
 	<h2><span class="glyphicon glyphicon-pencil"></span> INPUT ANGGOTA PERPUS</h2>
 	<form action="" method="post" enctype="multipart/form-data">
 		<div class="form-group">
 			<label>NIM</label>
 			<input type="text" name="nim" class="form-control" style="width: 500px;">
 		</div>
 		<div class="form-group">
 			<label>Nama</label>
 			<input type="text" name="nama" class="form-control" style="width: 500px;">
 		</div>
 		<div class="form-group">
 			<label>Semester</label>
 			<input type="text" name="semester" class="form-control" style="width: 500px;">
 		</div>
 		<div class="form-group">
 			<label>Tanggal lahir</label>
 			<input type="date" name="tanggal_lahir" class="form-control" style="width: 500px;">
 		</div>
 		<div class="form-group">
 			<label>Fakultas</label>
 			<input type="text" name="fak" class="form-control" style="width: 500px;">
 		</div>
 		<div class="form-group">
 			<label>Foto</label>
 			<input type="file" name="foto" class="form-control" style="width: 500px;">
 		</div>
 		<input type="submit" name="simpan" value="SIMPAN" class="btn btn-info">
 	</form>
 </div>