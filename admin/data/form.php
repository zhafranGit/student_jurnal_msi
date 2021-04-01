<div class="container-fluid">
    <h2 class="display-3" style="text-align: center;">Form Import</h2>
    <?php
        include "koneksi.php";
        ?>
    <hr>
    <form method="post" enctype="multipart/form-data" action="admin/data/import.php">
        <a href="admin/data/contoh_format.xls">
            <i class="fa fa-download" aria-hidden="true" style="font-size: larger;"> Download Format</i>
        </a>
        <br><br>
        <div class="input-group input-group-lg">
            Pilih File: 
	<input name="file" type="file" required="required" class="btn btn-light"> 
	<input name="upload" type="submit" value="Import" class="btn btn-dark">
            </div>
    </form>
    <hr>
</div>