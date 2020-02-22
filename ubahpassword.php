<?php
include('koneksi.php');
include('header.php');
if (isset($_POST['simpan'])) {
	$lama = $_POST['lama'];
	$baru = $_POST['baru'];
	$ulangi = $_POST['ulangi'];
	
}
?>
<div class="col-md-10">
	<h2><span class="glyphicon glyphicon-pencil"></span> UBAH PASSWORD</h2>
	<div class="form-group">
		<label>MASUKAN PASSWORD LAMA</label>
		<input type="password" name="lama" class="form-control" style="width: 500px;">
	</div>
	<div class="form-group">
		<label>MASUKAN PASSWORD BARU</label>
		<input type="password" name="baru" class="form-control" style="width: 500px;">
	</div>
	<div class="form-group">
		<label>ULANGI PASSWORD LAMA</label>
		<input type="password" name="ulangi" class="form-control" style="width: 500px;">
	</div>
	<input type="submit" name="simpan" class="btn btn-info">
</div>