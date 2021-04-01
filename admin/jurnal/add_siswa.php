
<div class="container-fluid">
  <div class="table-responsive">
  <table class="table table-striped">
        <h3 style="text-align: center;">DAFTAR SISWA</h3>
      <tr class="table-info">
        <th>no</th>
        <th>nama</th>
        <th>kelas</th>
        <th>pekan</th>
        <th>aksi</th>
      </tr>
      <?php 
      include "koneksi.php";
      if (isset($_GET['pilih'])) {
          # code...
          $pilih = $_GET['pilih'];
          $data = mysqli_query($koneksi,"select * from santri where nama like '%".$pilih."%'");
      }else {
        $data = mysqli_query($koneksi,"select nama, kelas, pekan from santri order by nama ASC");
      }
      $no = 1;
      while($d = mysqli_fetch_assoc($data)){
      ?>

      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $d['nama']; ?></td>
        <td><?php echo $d['kelas']; ?></td>
        <td><?php echo $d['pekan']; ?></td>
        <td>
          <a href="?page=jurnal&aksi=lapor&nama=<?php echo $d['nama']; ?>&pekan=<?php echo $d['pekan']; ?>" class="btn btn-primary active fas fa-edit" role="button"
            aria-pressed="true">ajukan</a>

        </td>
      </tr>
      <?php } ?>
    </table>
  </div>
</div>