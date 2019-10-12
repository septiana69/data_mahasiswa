<?php

//panggil koneksi ke database 
include('config/koneksi.php');

$nama   = $_POST['nama'];
$email  = $_POST['email'];
$alamat = $_POST['alamat'];

$query  = "INSERT INTO tbl_mahasiswa (nama_mahasiswa, email, alamat) VALUES('$nama', '$email','$alamat')";

if($connection->query($query) === TRUE) {
	header("location: tambah-mahasiswa.php");
}else{
	echo "DATA GAGAL DISIMPAN";
}

?>