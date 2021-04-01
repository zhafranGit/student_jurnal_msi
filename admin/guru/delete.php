<?php 

include "koneksi.php";

if (isset($_GET['no'])){
    
    $no = $_GET['no'];

    $query = mysqli_query($koneksi, "DELETE from admin where no='$no'");

    if ($query) {
        echo "<script>alert('Data berhasil dihapus !!!'); window.location='index.php?page=guru&aksi';</script>";	
	} else{
		echo "<script>alert('Data gagal dihapus') window.location='index.php?page=data&aksi?status=gagal';;</script>";
	}
} else {
    die("akses dilarang....");
}

?>