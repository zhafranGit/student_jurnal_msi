<?php

include "koneksi.php";
include "excel_reader2.php";

?>

<?php
$target = basename($_FILES['file']['name']) ;

move_uploaded_file($_FILES['file']['tmp_name'], $target);

chmod($_FILES['file']['name'],7054);

$data = new Spreadsheet_Excel_Reader($_FILES['file']['name'],false);

$jumlah_baris = $data->rowcount($sheet_index=0);

$berhasil = 0;
for ($i=2; $i<=$jumlah_baris; $i++){
	// Ambil data pada excel sesuai Kolom
		$pekan = $data->val($i, 1); // Ambil data NIS
		$nama = $data->val($i, 2); // Ambil data NIS
		$kelas = $data->val($i, 3);// Ambil data NIS
		$pelajaran = $data->val($i, 4); // Ambil data NIS
		$materi = $data->val($i, 5); // Ambil data NIS
		$nilai_proyek = $data->val($i, 6); // Ambil data NIS
		$nilai_praktek = $data->val($i, 7); // Ambil data NIS
		$nilai_portfolio = $data->val($i, 8); // Ambil data NIS

		// Cek jika semua data tidak diisi
		
		if($pekan != "" && $nama != "" && $kelas != "" && $pelajaran != "" && $materi != "" && $nilai_proyek != "" && $nilai_praktek != "" && $nilai_portfolio != ""){
		// Cek $numrow apakah lebih dari 1
		// Artinya karena baris pertama adalah nama-nama kolom
		// Jadi dilewat saja, tidak usah diimport
		// Buat query Insert
			// $query = "INSERT into santri VALUES('','$pekan','$nama','$kelas','$pelajaran','$materi','$nilai_proyek','$nilai_praktek','$nilai_portfolio')";

			// Eksekusi $query
			mysqli_query($koneksi, "INSERT into santri values('','$pekan','$nama','$kelas','$pelajaran','$materi','$nilai_proyek','$nilai_praktek','$nilai_portfolio')");
			$berhasil++; // Tambah 1 setiap kali looping
	}
}

unlink($_FILES['file']['name']);

echo "<script>alert('Data berhasil Ditambah !!!'); window.location='../../index.php?page=nilai&aksi';</script>";	

?>