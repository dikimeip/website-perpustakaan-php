<?php 
include('koneksi.php');
include('header.php');
$tanggal=date('d-m-y');
$tengang = date("d-m-y",time()+60*60*24*7);
if (isset($_POST['simpan'])) {
	$nama = $_POST['nama'];
	$buku = $_POST['buku'];
	$query=mysqli_query($db,"INSERT INTO pinjam VALUES (NULL,'$nama','$buku','$tanggal','$tengang') ");
	$kurang = mysqli_query($db,"UPDATE buku SET jumlah =(jumlah-1) where judul = '$buku' ");
	if ($db) {
		echo "<script>
			alert('PEMINJAMAN BERHASIL DIPROSES')
			document.location.href='pinjam.php'
			</script> ";
	} else {
		echo "<script>
			alert('PEMINJAMAN GAGAL DIPROSES')
			</script> ";
	}
}
 ?>
 <div class="col-md-10">
 	<h2><span class="glyphicon glyphicon-plus"></span> TAMBAH PEMINJAM</h2>
 	<form action="" method="post"> 
 		<div class="form-group">
 		<label>NAMA PEMINJAM</label>
 		<select name="nama" class="form-control" style="width: 500px;">
 		<option>-PILIH NAMA PEMINJAM-</option>
 			 <?php 
 			 $queri = mysqli_query($db,"SELECT * FROM anggota");
 			 while ($row=mysqli_fetch_assoc($queri)) {
 			 	echo "<option>".$row['nama']."</script>";
 			 }
 			  ?>
 		</select>
 	</div>
 	<div class="form-group">
 		<label>MASUKAN JUDUL BUKU</label>
 		<select name="buku" class="form-control" style="width: 500px;">
 		<option>-PILIH JUDUL BUKU-</option>
 			<?php 
 			$query=mysqli_query($db,"SELECT * FROM buku");
 			while ($row=mysqli_fetch_assoc($query)) {
 				echo "<option>".$row['judul']."</option>" ;
 			}
 			 ?>
 		</select>
 	</div>
 	<div class="form-group">
 		<label>TANGGAL PINJAM</label>
 		<input type="text" name="tanggal" style="width: 500px;" value="<?php echo $tanggal; ?>" class="form-control">
 	</div>
 	<div class="form-group">
 		<label>TANGGAL KEMBALI</label>
 		<input type="text" name="kembali" style="width: 500px;" value="<?php echo $tengang; ?>" class="form-control">
 	</div>
 	<input type="submit" name="simpan" value="SIMPAN" class="btn btn-info">
 	</form>
 </div>











