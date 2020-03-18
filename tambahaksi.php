<?php
	include 'koneksi.php';
	
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];	
	$prodi = $_POST['prodi'];	
	$alamat = $_POST['alamat'];
	
	mysqli_query($koneksi,"insert into mahasiswa values('$nama','$nim','$prodi','$alamat')");
	
	header("location:manipulasidata.php");
?>