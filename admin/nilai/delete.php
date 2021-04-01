<?php 

include "koneksi.php";

if (isset($_GET['id'])){
    
    $id = $_GET['id'];

    $query = mysqli_query($koneksi, "DELETE from santri where id=$id");

    if ($query) {

        echo "<script>alert('Data berhasil dihapus !!!'); window.location='index.php?page=nilai&aksi';</script>";	
	} else{
		echo "<script>alert('Data gagal dihapus') window.location='index.php?page=data&aksi?status=gagal';;</script>";
	}
} else {
    die("akses dilarang....");
}

?>