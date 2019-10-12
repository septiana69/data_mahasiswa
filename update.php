<?php

//panggil koneksi ke database 
include('config/koneksi.php');

$id     = $_POST['id_mahasiswa'];
$nama   = $_POST['nama'];
$email  = $_POST['email'];
$alamat = $_POST['alamat'];

$query  = "UPDATE tbl_mahasiswa SET nama_mahasiswa = '$nama', email =  '$email' ,alamat = '$alamat' WHERE id_mahasiswa = '$id' ";

if($connection->query($query) === TRUE) {
	header("location: tambah-mahasiswa.php");
}else{
	echo "DATA GAGAL DISIMPAN";
}

?>