<form method="POST" action="admin/nilai/aksi_add.php">
    <div class="container-fluid" style="position: static">
        <h1 class="card-title d-flex justify-content-center">Tambah Nilai</h5>
    </div>
    <div class="container">
        <div class="form-group row">
            <label for="pekan" class="col-sm-2 col-form-label">pekan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="pekan" placeholder="Masukan pekan">
            </div>
        </div>

        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" placeholder="Masukan pekan">
            </div>
        </div>
        <div class="form-group row">
            <label for="kelas" class="col-sm-2 col-form-label">kelas</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="kelas" placeholder="Masukan pekan">
            </div>
        </div>
        <div class="form-group row">
            <label for="pelajaran" class="col-sm-2 col-form-label">pelajaran</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="pelajaran" placeholder="Masukan pekan">
            </div>
        </div>
        <div class="form-group row">
            <label for="materi" class="col-sm-2 col-form-label">materi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="materi" placeholder="Masukan pekan">
            </div>
        </div>
        <div class="form-group row">
            <label for="nilai_proyek" class="col-sm-2 col-form-label">nilai proyek</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nilai_proyek" placeholder="Masukan pekan">
            </div>
        </div>
        <div class="form-group row">
            <label for="nilai_praktek" class="col-sm-2 col-form-label">nilai praktek</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nilai_praktek" placeholder="Masukan pekan">
            </div>
        </div>
        <div class="form-group row">
            <label for="nilai_portfolio" class="col-sm-2 col-form-label">nilai portofolio</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nilai_portfolio" placeholder="Masukan pekan">
            </div>
        </div>
    </div>

    <div class="container-lg">
        <input type="submit" name="simpan" value="simpan" class="btn btn-primary active">
    </div>
</form>
