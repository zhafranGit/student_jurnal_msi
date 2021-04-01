<?php

include "koneksi.php";

if (isset($_POST['simpan'])){
    $pekan = $_POST['pekan'];
	$nama = $_POST['nama'];
	$kelas = $_POST['kelas'];
	$pelajaran = $_POST['pelajaran'];
	$materi = $_POST['materi'];
	$nilai_proyek = $_POST['nilai_proyek'];
	$nilai_praktek = $_POST['nilai_praktek'];	
	$nilai_portfolio = $_POST['nilai_portfolio'];	

	$query = mysqli_query($koneksi, "INSERT INTO santri VALUES ('','$pekan','$nama','$kelas','$pelajaran','$materi','$nilai_proyek','$nilai_praktek','$nilai_portfolio')");
	if ($query) {
		# code...
        echo "<script>alert('Data berhasil Ditambah !!!'); window.location='../../index.php?page=nilai&aksi';</script>";	
	} else{
		echo "<script>alert('Data gagal Ditambah') window.location='../../index.php?page=data&aksi';</script>";
	}
} 
?>