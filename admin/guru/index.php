<div class="container-fluid">
        <div class="table-responsive">
        <table class="table table-striped">
            <h3 style="text-align: center;">DAFTAR GURU</h3>
            <tr class="table-info">
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>USERNAME</th>
                    <th>PASSWORD</th>
                    <th>LEVEL</th>
                    <th>AKSI</th>
                </tr>

                <tr>
                    <tbody>
                        <?php
                include "koneksi.php";
                $no=1;
                $data = mysqli_query($koneksi,"select * from admin");
                while($d = mysqli_fetch_assoc($data)){
                    ?>
                        <tr>
                            <th><?php echo $no++; ?></th>
                            <th><?php echo $d['nama']; ?></th>
                            <th><?php echo $d['username']; ?></th>
                            <th><?php echo $d['password']; ?></th>
                            <th><?php echo $d['level']; ?></th>
                            <th>
                                <a href="?page=guru&aksi=edit&no=<?php echo $d['no']; ?>"
                                    class="btn btn-primary active fas fa-edit" role="button" aria-pressed="true"> Edit
                                </a>
                                <a href="?page=guru&aksi=hapus&no=<?php echo $d['no']; ?>"
                                    class="btn btn-danger active fas fa-trash" role="button" aria-pressed="true"
                                    onclick="return confirm('Yakin hapus data ?')"> Delete </a>
                            </th>
                        </tr>
                        <?php
                }
                ?>
                    </tbody>
            </table>
            <p>Total: <?php echo mysqli_num_rows($data) ?></p>
        </div>
        <a href="?page=guru&aksi=tambah" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Tambah</a>
        <!-- <a href="add.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Tambah</a> -->
        <!-- <button class="btn btn-secondary" type="button" >tambah data</button> -->
    </div>