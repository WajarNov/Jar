<!DOCTYPE html>

<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
	<h2>Menambahkan data</h2>
	<br/>
	<a href="manipulasidata.php"><<< kembali</a>
	<h3>Tambah data mahasiswa</h3>
	<form method="post" action="tambahaksi.php">
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
	</form>
	
</body>
</html>
