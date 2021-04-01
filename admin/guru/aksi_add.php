<?php
include "koneksi.php";

if (isset($_POST['simpan'])){
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	if (!empty($_POST['level'])) {
		$selected = $_POST['level'];
	}
	// $level = $_POST['level'];

	$query = mysqli_query($koneksi, "INSERT INTO admin VALUES ('','$nama','$username','$password','$selected')");
	if ($query) {
		# code...
		echo "<script>alert('Data berhasil Ditambah !!!'); window.location='../../index.php?page=guru&aksi';</script>";	
	} else{
		echo "<script>alert('Data gagal Ditambah') window.location='../../index.php?page=guru&aksi';</script>";
	}
}
?>