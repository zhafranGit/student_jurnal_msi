<?php 

include "koneksi.php";

if (isset($_GET['id'])){    
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "DELETE from laporan where id='$id'");
    if ($query) {
        echo "<script>alert('Data berhasil dihapus !!!'); window.location='index.php?page=jurnal&aksi';</script>";	
	} else{
		echo "<script>alert('Data gagal dihapus') window.location='index.php?page=jurnal&aksi?status=gagal';;</script>";
	}
} else {
    die("akses dilarang....");
}
?>