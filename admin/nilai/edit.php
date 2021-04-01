 <?php
        include 'koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi,"SELECT * from santri where id='$id'");
        $nomor = 1;
        while ($tampil  = mysqli_fetch_assoc($data)){
        ?>
 <form method="POST" action="admin/nilai/aksi_edit.php">
     <div class="container" style="position: static">
         <h1 class="card-title d-flex justify-content-center">Tambah Nilai</h5>
     </div>
     <div class="container">
         <div class="form-group row">
             <label for="pekan" class="col-sm-2 col-form-label">pekan</label>
             <div class='col-sm-10'>
             <input type="hidden" name="id" value="<?php echo $tampil['id']; ?>">
                 <input type="text" class="form-control" name="pekan" aria-describedby="peringatan"
                     value="<?php echo $tampil['pekan']; ?>">
             </div>
         </div>

         <div class="form-group row">
             <label for="nama" class="col-sm-2 col-form-label">nama</label>
             <div class='col-sm-10'>
                 <input type="text" class="form-control" name="nama" aria-describedby="peringatan"
                     value="<?php echo $tampil['nama']; ?>">
             </div>
         </div>

         <div class="form-group row">
             <label for="kelas" class="col-sm-2 col-form-label">kelas</label>
             <div class='col-sm-10'>
                 <input type="text" class="form-control" name="kelas" aria-describedby="peringatan"
                     value="<?php echo $tampil['kelas']; ?>">
             </div>
         </div>

         <div class="form-group row">
             <label for="pelajaran" class="col-sm-2 col-form-label">pelajaran</label>
             <div class='col-sm-10'>
                 <input type="text" class="form-control" name="pelajaran" aria-describedby="peringatan"
                     value="<?php echo $tampil['pelajaran']; ?>">
             </div>
         </div>

         <div class="form-group row">
             <label for="materi" class="col-sm-2 col-form-label">materi</label>
             <div class='col-sm-10'>
                 <input type="text" class="form-control" name="materi" aria-describedby="peringatan"
                     value="<?php echo $tampil['materi']; ?>">
             </div>
         </div>

         <div class="form-group row">
             <label for="nilai_proyek" class="col-sm-2 col-form-label">nilai proyek</label>
             <div class='col-sm-10'>
                 <input type="text" class="form-control" name="nilai_proyek" aria-describedby="peringatan"
                     value="<?php echo $tampil['nilai_proyek']; ?>">
             </div>
         </div>

         <div class="form-group row">
             <label for="nilai_praktek" class="col-sm-2 col-form-label">nilai praktek</label>
             <div class='col-sm-10'>
                 <input type="text" class="form-control" name="nilai_praktek" aria-describedby="peringatan"
                     value="<?php echo $tampil['nilai_praktek']; ?>">
             </div>

         </div>
         <div class="form-group row">
             <label for="nilai_portfolio" class="col-sm-2 col-form-label">nilai portfolio</label>
             <div class='col-sm-10'>
                 <input type="text" class="form-control" name="nilai_portfolio" aria-describedby="peringatan"
                     value="<?php echo $tampil['nilai_portfolio']; ?>">
             </div>

         </div>
         <input type="submit" name="simpan" value="simpan" class="btn btn-primary active">
     </div>
 </form>
 <?php
}
?>