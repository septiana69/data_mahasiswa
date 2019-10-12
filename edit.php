<?php

	$id = $_GET['id'];

	//include koneksi
	include("config/koneksi.php");

	$sql = "SELECT * FROM tbl_mahasiswa WHERE id_mahasiswa = $id LIMIT 1";

	$result = mysqli_query($connection, $sql);
	$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Mahasiswa</title>
	<link rel="stylesheet" href="css/bootstrap.css">;
</head>
<body>

	<div class="container" style="margin-top: 100px">
		<div class="row">
			<div class="col-md-8 offset-md-2">

				<form action="update.php" method="POST">
				  <div class="form-group">
				    <label>NAMA MAHASISWA</label>
				    <input type="text" name="nama" value="<?php echo $row['nama_mahasiswa'] ?>" class="form-control" placeholder="Masukkan Nama Mahasiswa" required>
				    <input type="Hidden" name="id_mahasiswa" value="<?php echo $row['id_mahasiswa'] ?>">
				  </div>
				  <div class="form-group">
				    <label>EMAIL</label>
				    <input type="text" name="email" value="<?php echo $row['email'] ?>" class="form-control" placeholder="Masukkan Email" required>
				  </div>
				  <div class="form-group">
				    <label>ALAMAT</label>
				   	<textarea class="form-control" name="alamat" rows="4" placeholder="Masukkan Alamat" required><?php echo $row['alamat'] ?></textarea>
				  </div>
				  
				  <button type="submit" class="btn btn-success">UPDATE</button>
				</form>

			</div>
		</div>
	</div>

</body>
</html>