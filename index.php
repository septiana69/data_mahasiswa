<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
	<link rel="stylesheet" href="css/bootstrap.css">;
</head>
<body>

	<div class="container" style="margin-top: 70px">
		<div class="row">
			<div class="col-md-12">
			<a href="tambah-mahasiswa.php" class="btn btn-success btn-md" style="margin-bottom: 10px">TAMBAH</a>
				<table class="table table-striped">
				  <thead class="thead-dark">
				    <tr>
				      <th scope="col">Nama Mahasiswa</th>
				      <th scope="col">Email</th>
				      <th scope="col">Alamat</th>
				      <th scope="col">Aksi</th>
				    </tr>
				  </thead>
				  <tbody>

				  	<?php
				  		include('config/koneksi.php');
				  	?>

				  	<?php
				  		$query = "SELECT * FROM tbl_mahasiswa ORDER BY id_mahasiswa DESC";
				  		$result = mysqli_query($connection, $query);
				  	?>

				  	<?php
				  		while ($row = mysqli_fetch_array($result)) {
				  	?>

				       <tr>
				      	<td><?php echo $row['nama_mahasiswa'] ?></td>
				     	<td><?php echo $row['email'] ?></td>
				        <td><?php echo $row['alamat'] ?></td>
				        <td>
				        	<a href="edit.php?id=<?php echo $row['id_mahasiswa'] ?>" class="btn btn-primary btn-sm">EDIT</a>

				      	    <a href="hapus.php?id=<?php echo $row['id_mahasiswa'] ?>" class="btn btn-danger btn-sm">HAPUS</a>

				      </td>
				    </tr>

				    <?php } ?>

				  </tbody>
				</table>


			</div>
		</div>
	</div>

</body>
</html>