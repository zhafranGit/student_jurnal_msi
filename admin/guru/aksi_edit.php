	<?php

	include "koneksi.php";

	if (isset($_POST['simpan'])){
		$no = $_POST['no'];
		$nama = $_POST['nama'];
		$username = $_POST['username'];
		$password = $_POST['password'];

		if (!empty($_POST['level'])) {
			$selected = $_POST['level'];
		}

		$query = mysqli_query($koneksi, "UPDATE admin set nama='$nama', username='$username' ,password='$password', level='$selected'  where no ='$no'");
		if ($query) {
			# code...
			echo "<script>alert('Data berhasil Ditambah !!!'); window.location='../../index.php?page=guru&aksi';</script>";	
		} else{
			echo "<script>alert('Data gagal Ditambah') window.location='../../index.php?page=guru&aksi';</script>";
		}
	}
	?>