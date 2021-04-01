<?php 
session_start();
if($_SESSION['level']==""){
    header("location:login.php?pesan=gagal");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="style.css">
    <title>admin</title>
    <div class="container alert-warning" style="text-align: center;" role="alert">
    <?php
        $array_hr = array(1 => "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu");
        $hr = $array_hr[date('N')];
        $tgl = date('d');
        $array_bln = array(1 => "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
        $bln = $array_bln[date('n')];
        $thn = date('Y');
        echo $hr . ", " . $tgl . " " . $bln . " " . $thn . " ";
        ?>
    <h2 style="text-align: center;">Selamat Datang Di Sistem Informasi Students Jurnal MSI</h2>
    </div>
</head>  
<body>

    <section>
        <!-- <img src="../foto/logo.jpg" alt="logo"> -->
        <nav id="kiri">
            <tr>
            </tr>
            <ul>
                <!-- <li><a href="index.php">Home</a></li> -->
                <div class="float" style="font-size: 25px; text-align: left;">
                    <a href="?page=index&aksi" class="alert-link" style="color: green;">HOME</a>
                </div>
                <div class="float" style="font-size: 17px; text-align: left;">
                <li><a href="?page=data&aksi" class="alert-link">SISWA</a></li>
                <li><a href="?page=nilai&aksi" class="alert-link">NILAI</a></li>
                <li><a href="?page=guru&aksi" class="alert-link">GURU</a></li>
                <li><a href="?page=jurnal&aksi" class="alert-link">JURNAL</a></li>
                <li><a href="logout.php" class="alert-link" style="color: red;">LOGOUT</a></li>
                </div>
                <!-- <li><a href="logout.php" class="alert-link" style="color: red;">KELUAR</a></li> -->
            </ul>
        </nav>
        <article id="kanan">
            <div>
                <?php
                $page = $_GET['page'];
                $aksi = $_GET['aksi'];
                if ($page == "data") {
                    # code...
                    if ($aksi == "") {
                        # code...
                        include "admin/data/form.php";
                    } elseif ($aksi == "import") {
                        # code...
                        include "admin/data/import.php";
                    } 
                } elseif ($page == "nilai") {
                    # code...
                    if ($aksi == "") {
                        # code...
                        include "admin/data/index.php";
                    } elseif ($aksi == "tambah") {
                        # code...
                        include "admin/nilai/add.php";
                    } elseif ($aksi == "edit") {
                        # code...
                        include "admin/nilai/edit.php";
                    } elseif ($aksi == "hapus") {
                        # code...
                        include "admin/nilai/delete.php";
                    }
                } elseif ($page == "guru") {
                    # code...
                    if ($aksi == "") {
                        # code...
                        include "admin/guru/index.php";
                    } elseif ($aksi == "tambah") {
                        # code...
                        include "admin/guru/add.php";
                    } elseif ($aksi == "edit") {
                        # code...
                        include "admin/guru/edit.php";
                    } elseif ($aksi == "hapus") {
                        # code...
                        include "admin/guru/delete.php";
                    }
                } elseif ($page == "jurnal") {
                    # code...
                    if ($aksi == "") {
                        # code...
                        include "admin/jurnal/index.php";
                    } elseif ($aksi == "tambah") {
                        # code...
                        include "admin/jurnal/add_siswa.php";
                    } elseif ($aksi == "lapor") {
                        # code...
                        include "admin/jurnal/add_jurnal.php";
                    } elseif ($aksi == "print") {
                        # code...
                        include "admin/jurnal/print.php";
                    }elseif ($aksi == "pilih") {
                        # code...
                        include "admin/jurnal/aksi_print.php";
                    }elseif ($aksi == "hapus") {
                        # code...
                        include "admin/jurnal/delete.php";
                    }
                } elseif ($page == "index") {
                    if ($aksi == "") {
                        include 'home.php';
                    }
                    // include 'home.php';
                }
                ?>
            </div>
        </article>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>
