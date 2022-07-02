<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Halaman Home</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Data Komik</h1>

	<!-- tombol tambah data komik -->
	<a href="<?php echo base_url('/home/halaman_tambah') ?>">Tambah Data</a>
	<br>
	<br>
	<table border="1">

		<!-- field columnya -->
		<tr>
			<td>No</td>
			<td>TYPE</td>
			<td>Nama Komik</td>
			<td>Genre</td>
			<td>Author</td>
			<td>Favorite</td>
			<td>Aksi</td>
		</tr>
		
		<!-- Looping recordnya -->
		<?php 
			$count = 0;
			foreach ($queryAllKmk as $row) {
				$count = $count + 1;
			
		 ?>

		 <!-- datanya-->
		<tr>
			<td><?php echo $count ?></td>
			<td><?php echo $row->type ?></td>
			<td><?php echo $row->nama ?></td>
			<td><?php echo $row->genre ?></td>
			<td><?php echo $row->author ?></td>
			<td><?php echo $row->favorite ?></td>
			<td><a href="<?php echo base_url('/home/halaman_edit') ?>/<?php echo $row->id_komik ?>">Edit</a> | <a href="<?php echo base_url('/home/fungsiDelete') ?>/<?php echo $row->id_komik ?>">Delete</a></td>
		</tr>

		<?php } ?>
	</table>
</body>
</html>