	<?php

	include "koneksi.php";

	if (isset($_POST['simpan'])){
		$nama = $_POST['nama'];
		$kelas = $_POST['kelas'];
		$guru = $_POST['guru'];
		$kontak = $_POST['kontak'];
		$pekan = $_POST['pekan'];
		$kehadiran = $_POST['kehadiran'];
		$catatan_belajar = $_POST['catatan_belajar'];
		$book = $_POST['book'];	
		$diary = $_POST['diary'];	
		$riset = $_POST['riset'];	
		$alquran = $_POST['alquran'];	
		$catatan_penting = $_POST['catatan_penting'];
		$query = mysqli_query($koneksi, "INSERT INTO laporan VALUES ('','$nama','$kelas','$guru','$kontak','$pekan','$kehadiran','$catatan_belajar','$book','$diary','$riset','$alquran','$catatan_penting')");
		if ($query) {
			# code...
			echo "<script>alert('Data berhasil Ditambah !!!'); window.location='../../index.php?page=jurnal&aksi';</script>";	
		} else{
			echo "<script>alert('Data gagal Ditambah') window.location='../../index.php?page=data&aksi';</script>";
		}
	}

	?>