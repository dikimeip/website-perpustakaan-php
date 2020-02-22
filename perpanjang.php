<?php 
include('koneksi.php');
$id = $_GET['id'];
$tgl_kembali=$_GET['tgl_kembali'];
	$pecah			= explode("-",$tgl_kembali);
	$next_7_hari	= mktime(0,0,0,$pecah[1],$pecah[0]+7,$pecah[2]);
	$hari_next		= date("d-m-Y", $next_7_hari);


	$update_tgl_kembali=mysql_query("UPDATE pinjam SET tgl_kembali='$hari_next' WHERE id='$id'");
if ($query) {
	header('location:pinjam.php');
}

 ?>