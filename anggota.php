<?php 
include('header.php');
include('koneksi.php');
$query = mysqli_query($db,"SELECT * FROM anggota");
$no = 1;
if (isset($_POST['cari'])) {
	$cari = $_POST['cari'];
	$query=mysqli_query($db,"SELECT * FROM anggota WHERE nama like '%$cari%'  ");
}
 ?>
 <div class="col-md-10">
 	<h3><span class="glyphicon glyphicon-user"></span> DATA ANGGOTA PERPUS</h3>
 	<div class="col-md-4">
 		<a href="tambahanggota.php" class="btn btn-info" style="margin-bottom: 20px;"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
 	</div>
 	<div class="col-md-4"></div>
 	<div class="col-md-4">
 		<form action="" method="post">
 			<div class="input-group">
 				<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
				<input type="text" class="form-control" placeholder="Masukan Nama.." aria-describedby="basic-addon1" name="cari">
 			</div>
 		</form>
 	</div>
 	<table class="table">
 		<tr style="background-color: #cec8c9;">
 			<th>NO</th>
 			<th>NAMA</th>
 			<th>FAKULTAS</th>
 			<th>SEMESTER</th>
 			<th>TAHUN AKTIF</th>
 			<th>AKSI</th>
 		</tr>
 		<?php while($row = mysqli_fetch_assoc($query)) : ?>
 		<tr>
 			<td><?php echo $no++; ?></td>
 			<td><a href="detailanggota.php?id=<?= $row['id'] ?>" style="color: black;text-decoration: none;"><?= $row['nama'] ?></a></td>
 			<td><?= $row['fakultas'] ?></td>
 			<td><?= $row['semester'] ?></td>
 			<td><?= $row['tanggal_lahir'] ?></td>
 			<td><a href="hapusanggota.php?id=<?= $row['id'] ?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> HAPUS</a></td>
 		</tr>
 	<?php endwhile; ?>
 	</table>
 </div>