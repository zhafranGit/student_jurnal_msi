            <?php
                include 'koneksi.php';
                $nama = $_GET['nama'];
                $pekan = $_GET['pekan'];
                $data = mysqli_query($koneksi,"SELECT * from santri where nama='$nama' and pekan='$pekan'");
                $nomor = 1;
                while ($tampil  = mysqli_fetch_assoc($data)){
                ?>

            <div class="container">
                <table class="table table-striped">
                    <tr>
                        <th>no</th>
                        <th>pelajaran</th>
                        <th>materi</th>
                        <th>nilai proyek</th>
                        <th>nilai praktek</th>
                        <th>nilai portfolio</th>
                    </tr>
                    <tr>
                        <td><?php echo $nomor++; ?></td>
                        <td><?php echo $tampil['pelajaran']; ?></td>
                        <td><?php echo $tampil['materi']; ?></td>
                        <td><?php echo $tampil['nilai_proyek']; ?></td>
                        <td><?php echo $tampil['nilai_praktek']; ?></td>
                        <td><?php echo $tampil['nilai_portfolio']; ?></td>
                    </tr>
                </table>
            </div>
            <?php } ?>
            <?php
                include 'koneksi.php';
                $nama = $_GET['nama'];
                // $id = $_GET['id'];
                $pekan = $_GET['pekan'];

                $data = mysqli_query($koneksi,"SELECT * from santri where id");
                $nomor = 1;
                $tampil  = mysqli_fetch_assoc($data);
                ?>
            <form method="POST" action="admin/jurnal/aksi_add.php" class="was-validated">
                <div class="container-fluid">
                    <h1 class="card-title d-flex justify-content-center">Data Student Jurnal</h5>
                </div>
                <div class="container">
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" placeholder="Masukan nama"
                                value="<?php echo $tampil['nama']; ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="kelas" class="col-sm-2 col-form-label">kelas</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="kelas" placeholder="Masukan kelas"
                                value="<?php echo $tampil['kelas']; ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="pekan" class="col-sm-2 col-form-label">pekan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="pekan" placeholder="Masukan pekan"
                                value="<?php echo $tampil['pekan']; ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="guru" class="col-sm-2 col-form-label">coach</label>
                        <div class="col-sm-10">
                            <input type="text" required="required" class="form-control" name="guru" placeholder="Masukan coach">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="kontak" class="col-sm-2 col-form-label">kontak</label>
                        <div class="col-sm-10">
                            <input type="text" required="required" class="form-control" name="kontak" placeholder="Masukan kontak coach">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="kehadiran" class="col-sm-2 col-form-label">kehadiran</label>
                        <div class="col-sm-10">
                            <textarea name="kehadiran" class="form-control" rows="3" required="required"
                                placeholder="kehadiran santri dalam kelas"></textarea>
                            <!-- <input type="text" class="form-control" name="kehadiran" placeholder="Masukan jumlah hari" required="required"> -->
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="catatan_belajar" class="col-sm-2 col-form-label">catatan belajar</label>
                        <div class="col-sm-10">
                            <textarea name="catatan_belajar" id="catatan_belajar" class="form-control" rows="3"
                                required="required" placeholder="dari Coach untuk santri"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="book" class="col-sm-2 col-form-label">book</label>
                        <div class="col-sm-10">
                            <!-- <input type="text" class="form-control" name="book" placeholder="Masukan judul" required="required"> -->
                            <textarea name="book" id="book" class="form-control" rows="3" required="required"
                                placeholder="penjelasan buku yang dibaca"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="diary" class="col-sm-2 col-form-label">diary</label>
                        <div class="col-sm-10">
                            <!-- <input type="text" class="form-control" name="diary" placeholder="Masukan surat diary quran" required="required"> -->
                            <textarea name="diary" id="input" class="form-control" rows="3" required="required"
                                placeholder="penjelasan diary quran"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="riset" class="col-sm-2 col-form-label">riset</label>
                        <div class="col-sm-10">
                            <textarea name="riset" id="input" class="form-control" rows="3"
                                placeholder="penjelasan diary quran" required="required"></textarea>
                            <!-- <input type="text" class="form-control" name="riset" placeholder="Masukan password"> -->
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="alquran" class="col-sm-2 col-form-label">alquran</label>
                        <div class="col-sm-10">
                            <textarea name="alquran" id="input" class="form-control" rows="3" required="required"
                                placeholder="penjelasan perkembangan tahfiz al-quran"></textarea>
                            <!-- <input type="text" class="form-control" name="alquran" placeholder="Masukan password"> -->
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="catatan_penting" class="col-sm-2 col-form-label">catatan penting</label>
                        <div class="col-sm-10">
                            <textarea name="catatan_penting" id="input" class="form-control" rows="3"
                                required="required" placeholder="penjelasan dari coach untuk santri"></textarea>
                            <!-- <input type="text" class="form-control" name="catatan_penting" placeholder="Masukan password"> -->
                        </div>
                    </div>

                </div>

                <div class="container-lg">
                    <input type="submit" name="simpan" value="simpan" class="btn btn-primary btn-lg active">
                    <!-- <a href="index.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">cancel</a> -->
                    <a href="?page=jurnal&aksi=tambah" class="btn btn-warning btn-lg active" role="button"
                        aria-pressed="true">Kembali</a>
                </div>
            </form>
