<?php 
include('header.php');
include('koneksi.php');
$id=$_GET['id'];
$query = mysqli_query($db,"SELECT * FROM buku WHERE id = '$id'");
$row = mysqli_fetch_assoc($query);
 ?>
 <div class="col-md-5">
 	<h2><span class="glyphicon glyphicon-list-alt"></span> DETAIL DATA BUKU</h2>
 	<table class="table">
 		<tr>
 			<td>JUDUL BUKU</td>
 			<td><?= $row['judul'] ?></td>
 		</tr>
 		<tr>
 			<td>PENGARANG BUKU</td>
 			<td><?= $row['pengarang'] ?></td>
 		</tr>
 		<tr>
 			<td>PENERBIT BUKU</td>
 			<td><?= $row['penerbit'] ?></td>
 		</tr>
 		<tr>
 			<td>TAHUN PEMBUATAN BUKU</td>
 			<td><?= $row['tahun'] ?></td>
 		</tr>
 		<tr>
 			<td>ISBN BUKU</td>
 			<td><?= $row['isbn'] ?></td>
 		</tr>
 		<tr>
 			<td>JUMLAH BUKU</td>
 			<td><?= $row['Jumlah'] ?></td>
 		</tr>
 		<tr>
 			<td>LOKASI RAK BUKU</td>
 			<td><?= $row['lokasi'] ?></td>
 		</tr>
 		<tr>
 			<td>TANGGAL MASUK BUKU</td>
 			<td><?= $row['tanggal_input'] ?></td>
 		</tr>
 		<tr>
 			<td></td>
 			<td><img src="img/<?php echo $row['foto'] ?>" style="width: 100px;"></td>
 		</tr>
 	</table>
 </div>