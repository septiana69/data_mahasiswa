<?php

//panggil koneksi ke database 
include('config/koneksi.php');

$id   = $_GET['id'];

$query  = "DELETE FROM tbl_mahasiswa WHERE id_mahasiswa = '$id'";

if($connection->query($query) === TRUE) {
	header("location: index.php");
}else{
	echo "DATA GAGAL DIHAPUS";
}

?>