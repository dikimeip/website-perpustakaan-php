<?php 
include('header.php');
include ('koneksi.php');
$no = 1;
$query = mysqli_query($db,"SELECT * FROM buku");
if (isset($_POST['cari'])) {
	$cari = $_POST['cari'];
	$query = mysqli_query($db,"SELECT * FROM buku WHERE judul LIKE '%$cari%' ");
}
 ?>
 <div class="col-md-10">
 	<h3><span class="glyphicon glyphicon-user"></span> DATA BUKU PERPUSTAKAAN</h3>
 	<div class="col-md-4">
 		<a href="tambahbuku.php" class="btn btn-info" style="margin-bottom: 20px;"><span class="glyphicon glyphicon-plus"></span> TAMBAH</a>
 	</div>
 	<div class="col-md-4"></div>
 	<div class="col-md-4">
 		<form action="" method="post">
 			<div class="input-group">
 			<span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
 			<input type="text" name="cari" class="form-control" placeholder="Masukan Nama...">
 		</div>
 		</form>
 	</div>
 	<table class="table table-striped">
 		<tr>
 			<th>NO</th>
 			<th>JUDUL</th>
 			<th>PENGARANG</th>
 			<th>PENERBIT</th>
 			<th>TAHUN</th>
 			<th>JUMLAH</th>
 			<th>AKSI</th>
 		</tr>
 		<?php while($row = mysqli_fetch_assoc($query)): ?>
 		<tr>
 			<td><?= $no++ ?></td>
 			<td><a href="detailbuku.php?id=<?= $row['id'] ?>" style="color: black;text-decoration: none;"><?= $row['judul'] ?></a></td>
 			<td><?= $row['pengarang'] ?></td>
 			<td><?= $row['penerbit'] ?></td>
 			<td><?= $row['tahun'] ?></td>
 			<td><?= $row['Jumlah'] ?></td>
 			<td><a href="hapusbuku.php?id=<?= $row['id'] ?>" class="btn btn-danger">HAPUS</a>
 				<a href="editbuku.php?id=<?= $row['id'] ?>" class="btn btn-info">UBAH</a></td>
 		</tr>
 	<?php endwhile; ?>
 	</table>
 </div>