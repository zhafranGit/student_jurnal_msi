  <?php
    include 'koneksi.php';
    $id    = $_GET['id'];
    $sql  = mysqli_query($koneksi,"SELECT * from laporan where id='$id'");
    $nomor = 1;
    while ($data  = mysqli_fetch_assoc($sql)){
    ?>
  <table style="width: 100%;">
      <th>
          <img src="logo.png" alt="logo">
      </th>
      <th class="align-text-center">
          <h1 style="font-weight: bold;">MADRASAH ASALAM SAYANG IBU</h1>
          <h4>Jln. Sonokling No. 46 Dasan Geria Kec.Lingsar Kab.Lombok barat </p>
              <h2 style="font-weight: bold;">STUDENT JURNAL</h2>
              <h3 style="font-weight: bold;">TAHUN PELAJARAN : 2020 – 2021</h3>
      </th>
  </table>

  <table style="width: 100%;">
      <th>
          <p style="text-align: left; padding-left: 40px;">NAMA : <?php echo $data['nama']; ?></p>
          <p style="text-align: left; padding-left: 40px;">KELAS : <?php echo $data['kelas']; ?></p>
      </th>
      <th>
          <p style="text-align: left; padding-left: 50%;">COACH : <?php echo $data['guru']; ?></p>
          <p style="text-align: left; padding-left: 50%;">KONTAK : <?php echo $data['kontak']; ?></p>
      </th>
  </table>

  <table style="width: 100%;">
      <th>
          <p style="text-align: center; font-weight: bold; font-size: large;">PEKAN : <?php echo $data['pekan']; ?></p>
      </th>
  </table>

  <table border="1" style="border-collapse: collapse; width: 
    100%;">
      <tr style="background-color: gray;">
          <th width="1%">No</th>
          <th style="text-align: center;">kehadiran</th>
          <th style="text-align: center;">catatan_belajar</th>
          <th style="text-align: center;">book</th>
          <th style="text-align: center;">diary</th>
          <th style="text-align: center;">riset</th>
          <th style="text-align: center;">alquran</th>
          <th style="text-align: center;">catatan_penting</th>
      </tr>
      <tr>
          <td style="text-align: center;"><?php echo $nomor++; ?></td>
          <td style="text-align: center;"><?php echo $data['kehadiran']; ?></td>
          <td style="text-align: center;"><?php echo $data['catatan_belajar']; ?></td>
          <td style="text-align: center;"><?php echo $data['book']; ?></td>
          <td style="text-align: center;"><?php echo $data['diary']; ?></td>
          <td style="text-align: center;"><?php echo $data['riset']; ?></td>
          <td style="text-align: center;"><?php echo $data['alquran']; ?></td>
          <td style="text-align: center;"><?php echo $data['catatan_penting']; ?></td>
      </tr>

  </table>

  <!-- <table>
        <tr>
            <td>nama</td>
            <td>:</td>
            <td><?php echo $tampil['nama']; ?></td>
        </tr>
        
        <tr>
            <td>kelas</td>
            <td>:</td>
            <td><?php echo $tampil['kelas']; ?></td>
        </tr>

        <tr>
            <td>guru</td>
            <td>:</td>
            <td><?php echo $tampil['guru']; ?></td>
        </tr>

        <tr>
            <td>kontak</td>
            <td>:</td>
            <td><?php echo $tampil['kontak']; ?></td>
        </tr>

        <tr>
            <td>pekan</td>
            <td>:</td>
            <td><?php echo $tampil['pekan']; ?></td>
        </tr>

        <tr>
            <td>kehadiran</td>
            <td>:</td>
            <td><?php echo $tampil['kehadiran']; ?></td>
        </tr>

        <tr>
            <td>catatan belajar</td>
            <td>:</td>
            <td><?php echo $tampil['catatan_belajar']; ?></td>
        </tr>

        <tr>
            <td>book</td>
            <td>:</td>
            <td><?php echo $tampil['book']; ?></td>
        </tr>
        
        <tr>
            <td>diary</td>
            <td>:</td>
            <td><?php echo $tampil['diary']; ?></td>
        </tr>

        <tr>
            <td>riset</td>
            <td>:</td>
            <td><?php echo $tampil['riset']; ?></td>
        </tr>

        <tr>
            <td>alquran</td>
            <td>:</td>
            <td><?php echo $tampil['alquran']; ?></td>
        </tr>

        <tr>
            <td>catatan penting</td>
            <td>:</td>
            <td><?php echo $tampil['catatan_penting']; ?></td>
        </tr>

        </table>
        <br/> -->

        <div class="float" style="font-size: 25px; text-align: center;">
            <a href="admin/jurnal/aksi_print.php?id=<?php echo $data['id']; ?>" class="alert-link" style="color: green;">cetak</a>
        </div>
  <?php } ?>
  </form>