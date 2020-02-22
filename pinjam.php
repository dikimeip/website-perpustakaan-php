<?php 
include('koneksi.php');
include('header.php');
$no = 1;
$query=mysqli_query($db,"SELECT * FROM pinjam");
 ?>
 <div class="col-md-10">
 	<h2><span class="glyphicon glyphicon-user"></span> PEMINJAMAN BUKU</h2>
 	<div class="col-md-4">
 		<a href="tambahtransaksi.php" class="btn btn-info" style="margin-bottom: 20px;"><span class="glyphicon glyphicon-plus"></span> TAMBAH</a>
 	</div>
 	<div class="col-md-4"></div>
 	<div class="col-md-4">
 		<form action="" method="post">
 			<div class="input-group">
 				<span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
 				<input type="text" name="cari" class="form-control" placeholder="Cari Nama..">
 			</div>
 		</form>
 	</div>
 	<table class="table">
 		<tr>
 			<th>NO</th>
 			<th>JUDUL BUKU</th>
 			<th>PEMINJAM</th>
 			<th>TGL PINJAM</th>
 			<th>TGL KEMBALI</th>
 			<th>AKSI</th>
 		</tr>
 		<?php while($row=mysqli_fetch_array($query)) : ?>
 		<tr>
 			<td><?= $no++ ?></td>
 			<td><?= $row['buku'] ?></td>
 			<td><?= $row['nama'] ?></td>
 			<td><?= $row['tgl_pinjam'] ?></td>
 			<td><?= $row['tgl_kembali'] ?></td>
 			<td><a href="" class="btn btn-info">KEMBALI</a>
 				<a href="perpanjang.php?id=<?= $row['id'] ?>" class="btn btn-info">PERPANJANG</a></td>
 		</tr>
 	<?php endwhile; ?>
 	</table>
 </div>