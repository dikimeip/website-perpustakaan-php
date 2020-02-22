<?php 
include('koneksi.php');
include('header.php');
$id = $_GET['id'];
$query = mysqli_query($db,"SELECT * FROM anggota WHERE id = '$id' ");
$row = mysqli_fetch_assoc($query)
 ?>
 <div class="col-md-5">
 	<h2>DETAIL ANGGOTA PERPUS</h2>
 	<table class="table">
 		<tr>
 			<td>NIM</td>
 			<td><?= $row['nim'] ?></td>
 		</tr>
 		<tr>
 			<td>NAMA</td>
 			<td><?= $row['nama'] ?></td>
 		</tr>
 		<tr>
 			<td>SEMESTER</td>
 			<td><?= $row['semester'] ?></td>
 		</tr>
 		<tr>
 			<td>TABGGAL LAHIR</td>
 			<td><?= $row['tanggal_lahir'] ?></td>
 		</tr>
 		<tr>
 			<td>FAKULTAS</td>
 			<td><?= $row['fakultas'] ?></td>
 		</tr>
 		<tr>
 			<td>TAHUN DAFTAR</td>
 			<td><?= $row['aktif'] ?></td>
 		</tr>
 		<tr>
 			<td></td>
 			<td><img src="img/<?= $row['foto'] ?>" style="width: 100px;"></td>
 		</tr>
 	</table>
 </div>