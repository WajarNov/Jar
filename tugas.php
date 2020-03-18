<!DOCTYPE html>

<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
	<h2>Menambahkan data</h2>
	<br/>
	<a href="full.php"><<< kembali</a>
	<h3>Tambah data mahasiswa</h3>
	<form method="post" action="tambahaksi2.php">
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Nim</td>
				<td><input type="number" name="nim"></td>
			</tr>
			<tr>
				<td>Prodi</td>
				<td><input type="text" name="prodi"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>
		</table>
		<table border="1">
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Nim</th>
				<th>Prodi</th>
				<th>Alamat</th>
			</tr>
			<?php
			include 'koneksi.php';
			$no = 1;
			$data = mysqli_query($koneksi,"select * from mahasiswa");
			while($d = mysqli_fetch_array($data)){
				?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $d['nama']; ?></td>
					<td><?php echo $d['nim']; ?></td>
					<td><?php echo $d['prodi']; ?></td>
					<td><?php echo $d['alamat']; ?></td>
				</tr>
				<?php
			}
			?>

		</table>
	<a href="tambahdata.php">+ tambah data mahasiswa</a>
	</form>
	
</body>
</html>
