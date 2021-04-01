<form method="POST" action="admin/guru/aksi_add.php">
        <div class="container-fluid" style="position: static">
            <h1 class="card-title d-flex justify-content-center">DAFTAR GURU</h5>
        </div>
        <div class="container">
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" placeholder="Masukan nama">
                </div>
            </div>
            <div class="form-group row">
                <label for="level" class="col-sm-2 col-form-label">level</label>
                <div class="col-sm-10">
                <select class="custom-select" name="level">
                    <option value="" disabled selected>Open this select menu</option>
                    <option value="guru">guru</option>
                    <option value="penggurus">pengurus</option>
                    <option value="admin">admin</option>
                </select>
            </div>
            </div>

            <div class="form-group row">
                <label for="username" class="col-sm-2 col-form-label">username</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="username" placeholder="Masukan username">
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label">password</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="password" placeholder="Masukan password">
                </div>
            </div>
        </div>

        <div class="container-lg">
            <input type="submit" name="simpan" value="simpan" class="btn btn-primary btn-lg active">
            <!-- <a href="index.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">cancel</a> -->
            <!-- <a href="index.php" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Kembali</a> -->
        </div> 
    </form>