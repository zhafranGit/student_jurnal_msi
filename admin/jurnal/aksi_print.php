<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

    <?php 
	include 'koneksi.php';
    $id = $_GET['id'];
    $no = 1;
    $sql = mysqli_query($koneksi,"select * from laporan where id='$id'");
    while($data = mysqli_fetch_array($sql)){

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
			<td style="text-align: center;"><?php echo $no++; ?></td>
			<td style="text-align: center;"><?php echo $data['kehadiran']; ?></td>
            <td style="text-align: center;"><?php echo $data['catatan_belajar']; ?></td>
			<td style="text-align: center;"><?php echo $data['book']; ?></td>
			<td style="text-align: center;"><?php echo $data['diary']; ?></td>
            <td style="text-align: center;"><?php echo $data['riset']; ?></td>
			<td style="text-align: center;"><?php echo $data['alquran']; ?></td>
			<td style="text-align: center;"><?php echo $data['catatan_penting']; ?></td>
        </tr>
		<?php 
		}
		?>
	</table>
 
	<script>
		window.print();
	</script>
 
</body>
</html>