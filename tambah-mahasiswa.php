<!DOCTYPE html>
<html>
<head>
	<title>Tambah Mahasiswa</title>
	<link rel="stylesheet" href="css/bootstrap.css">;
</head>
<body>

	<div class="container" style="margin-top: 70px">
		<div class="row">
			<div class="col-md-8 offset-md-2">

				<form action="simpan-mahasiswa.php" method="POST">
				  <div class="form-group">
				    <label>NAMA MAHASISWA</label>
				    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Mahasiswa" required>
				  </div>
				  <div class="form-group">
				    <label>EMAIL</label>
				    <input type="text" name="email" class="form-control" placeholder="Masukkan Email" required>
				  </div>
				  <div class="form-group">
				    <label>ALAMAT MAHASISWA</label>
				   	<textarea class="form-control" name="alamat" rows="4" placeholder="Masukkan Alamat Mahasiswa" required></textarea>
				  </div>
				  
				  <button type="submit" class="btn btn-success">SIMPAN</button>
				</form>

			</div>
		</div>
	</div>

</body>
</html>