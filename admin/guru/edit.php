<?php
        include 'koneksi.php';
        $no = $_GET['no'];
        $data = mysqli_query($koneksi,"SELECT * from admin where no ='$no'");
        $nomor = 1;
        while ($tampil  = mysqli_fetch_assoc($data)){
        ?>
        
<form method="POST" action="admin/guru/aksi_edit.php">
<div class="container">
    <h1 class="card-title d-flex justify-content-center">TABLE GURU</h5>
</div>
<div class="container">
    <div class="form-group row">
        <label for="nama" class="col-sm-2 col-form-label">nama</label>
        <div class='col-sm-10'>
        <input type="hidden" name="no" value="<?php echo $tampil['no']; ?>">
            <input type="text" class="form-control" name="nama" aria-describedby="peringatan"
                value="<?php echo $tampil['nama']; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="level" class="col-sm-2 col-form-label">nomor</label>
        <div class='col-sm-10'>
        <select class="custom-select" name="level">
            <option value="" disabled selected></option>
            <option value="guru">guru</option>
            <option value="penggurus">pengurus</option>
            <option value="admin">admin</option>
        </select>
        </div>
    </div>

    <div class="form-group row">
        <label for="username" class="col-sm-2 col-form-label">username</label>
        <div class='col-sm-10'>
            <input type="text" class="form-control" name="username" aria-describedby="peringatan"
                value="<?php echo $tampil['username']; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="col-sm-2 col-form-label">password</label>
        <div class='col-sm-10'>
            <input type="text" class="form-control" name="password" aria-describedby="peringatan"
                value="<?php echo $tampil['password']; ?>">
        </div>
    </div>

    <div class="container-lg">
        <input type="submit" name="simpan" value="simpan" class="btn btn-primary btn-lg active">
        <!-- <a href="index.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">cancel</a> -->
        <!-- <a href="index.php" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Kembali</a> -->

    </div>
    </form>
    <?php
}
?>