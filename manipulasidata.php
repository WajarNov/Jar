<!DOCTYPE html>
<html>
<head>
	<title>Manipulasi data</title>
</head>
<body>
	<h2>Menampilkan data mahasiswa</h2>
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
</body>
</html>