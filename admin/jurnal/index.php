<div class="container">
        <div class="table-responsive">
        <table class="table table-striped">
            <h3 style="text-align: center;">DAFTAR STUDENT JURNAL</h3>
            <tr class="table-info">
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>KELAS</th>
                    <th>PEKAN</th>
                    <th>AKSI</th>
                </tr>
                <tr>
                    <tbody>
                        <?php
                
                include "koneksi.php";
                $no=1;
                $data = mysqli_query($koneksi,"select * from laporan");
                while($d = mysqli_fetch_array($data)){
                    ?>
                        <tr>
                            <th><?php echo $no++; ?></th>
                            <th><?php echo $d['nama']; ?></th>
                            <th><?php echo $d['kelas']; ?></th>
                            <th><?php echo $d['pekan']; ?></th>
                            <th>
                                
                                <a href="?page=jurnal&aksi=print&id=<?php echo $d['id']; ?>"
                                    class="btn btn-warning active fas fa-print" role="button" aria-pressed="true"
                                    onclick="return confirm('Yakin print data ?')"> Print </a>

                                <a href="?page=jurnal&aksi=hapus&id=<?php echo $d['id']; ?>"
                                    class="btn btn-danger active fas fa-trash" role="button" aria-pressed="true"
                                    onclick="return confirm('Yakin hapus data ?')"> Delete</a>
                            </th>
                        </tr>
                        <?php
                }
                ?>
                    </tbody>
            </table>
            <p>Total: <?php echo mysqli_num_rows($data) ?></p>
        </div>
        <a href="?page=jurnal&aksi=tambah" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Tambah</a>
        <!-- <a href="../index.php" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Kembali</a> -->
        <!-- <button class="btn btn-secondary" type="button" >tambah data</button> -->
    </div>
</br>
