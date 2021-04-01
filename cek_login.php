<?php 
// mengaktifkan session pada php
session_start();
// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
$page = $_GET['page'];
$aksi = $_GET['aksi'];

// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from admin where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['level']=="admin"){
		// session_start();
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:index.php?page=index&aksi");

	// cek jika user login sebagai pegawai
	// }
	// else if($data['level']=="guru"){
	// 	// buat session login dan username
	// 	$_SESSION['username'] = $username;
	// 	$_SESSION['level'] = "guru";
	// 	// alihkan ke halaman dashboard pegawai
	// 	header("location:halaman_guru.php");

	// // cek jika user login sebagai pengurus
	// }else if($data['level']=="pengurus"){
	// 	// buat session login dan username
	// 	$_SESSION['username'] = $username;
	// 	$_SESSION['level'] = "pengurus";
	// 	// alihkan ke halaman dashboard pengurus
	// 	header("location:halaman_pengurus.php");

	}else{

		// alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
	}
}else{
	header("location:login.php?pesan=gagal");
}

?>