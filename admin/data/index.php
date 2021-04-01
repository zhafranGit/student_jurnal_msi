<div class="container-fluid">
        <div class="table-responsive">

        <?php if(isset($_GET['status'])): ?>
            <p>
                <?php
                    if($_GET['status'] == 'tambah'){
                        echo "tambah data siswa baru berhasil!";
                    } else {
                        echo "tambah data gagal!";
                }
            ?>
            </p>

            <p>
                <?php
                    if($_GET['status'] == 'edit'){
                        echo "edit data siswa baru berhasil!";
                    } else {
                        echo "edit data gagal!";
                }
            ?>
            </p>
        <?php endif; ?>

            <table class="table table-striped">
                <h3 style="text-align: center;">DATA NILAI SISWA</h3>
                <tr class="table-info">
                    <th>NO</th>
                    <th>PEKAN</th>
                    <th>NAMA</th>
                    <th>KELAS</th>
                    <th>PELAJARAN</th>
                    <th>MATERI</th>
                    <th>NILAI PROYEK</th>
                    <th>NILAI PRAKTEK</th>
                    <th>NILAI PORTFOLIO</th>
                    <th>AKSI</th>
                </tr>

                <tr>
                    <tbody>
                        <?php
                include "koneksi.php";
                $no=1;
                $data = mysqli_query($koneksi,"select * from santri");
                while($d = mysqli_fetch_array($data)){
                    ?>
                        <tr style="font-weight: normal;">
                            <th><?php echo $no++; ?></th>
                            <th><?php echo $d['pekan']; ?></th>
                            <th><?php echo $d['nama']; ?></th>
                            <th><?php echo $d['kelas']; ?></th>
                            <th><?php echo $d['pelajaran']; ?></th>
                            <th><?php echo $d['materi']; ?></th>
                            <th><?php echo $d['nilai_proyek']; ?></th>
                            <th><?php echo $d['nilai_praktek']; ?></th>
                            <th><?php echo $d['nilai_portfolio']; ?></th>
                            <th>

                                <a href="?page=nilai&aksi=edit&id=<?php echo $d['id']; ?>"
                                    class="btn btn-primary active fas fa-edit" role="button" aria-pressed="true">Edit</a>
                                <a href="?page=nilai&aksi=hapus&id=<?php echo $d['id']; ?>"
                                    class="btn btn-danger active fas fa-trash" role="button" aria-pressed="true"
                                    onclick="return confirm('Yakin hapus data ?')">Delete</a>
                            </th>
                        </tr>
                        <?php
                }
                ?>
                    </tbody>
            </table>
            <p>Total: <?php echo mysqli_num_rows($data) ?></p>
        </div>
        <a href="?page=nilai&aksi=tambah" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Tambah</a>
        <!-- <button class="btn btn-secondary" type="button" >tambah data</button> -->
    </div>