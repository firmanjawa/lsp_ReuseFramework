<!DOCTYPE html>
<html>
<head>
	<title>Halaman Edit</title>
</head>
<body>
	<h3>Edit Data</h3>
	<!-- tombol kembali -->
	<tr>
		<td colspan="3"><button type="submit"><a href="javascript:window.history.go(-1);">Back</a></button></td>
	</tr>
	<br>
	<br>
	<form action="<?php echo base_url('home/fungsiEdit') ?>" method="post">
	<table>

		<!-- input data -->
		<tr>
			<td>ID Komik</td>
			<td>:</td>
			<td><input type="text" name="id_komik" value="<?php echo $queryKmkDetail->id_komik ?>" readonly></input></td>
		</tr>

		<!-- inputan jenis radio button -->
		<tr>
			<td>TYPE</td>
			<td>:</td>
			<td>
				<input type="radio" name="type" class="input-control" <?php if($queryKmkDetail->type=="Manga") echo "checked";?> value="Manga">Manga &nbsp;&nbsp;&nbsp;
				<input type="radio" name="type" class="input-control" <?php if($queryKmkDetail->type=="Manhwa") echo "checked";?> value="Manhwa">Manhwa &nbsp;&nbsp;&nbsp;
				<input type="radio" name="type" class="input-control" <?php if($queryKmkDetail->type=="Manhua") echo "checked";?> value="Manhua">Manhua
			</td>
		</tr>
		<tr>
			<td>Nama Komik</td>
			<td>:</td>
			<td><input type="text" name="nama" value="<?php echo $queryKmkDetail->nama ?>"></input></td>
		</tr>

		<!-- inputan jenis textarea -->
		<tr>
			<td>Genre</td>
			<td>:</td>
			<td>
				<textarea class="input-control" name="genre" value="<?php echo $queryKmkDetail->genre ?>"><?php echo $queryKmkDetail->genre ?></textarea>
			</td>
		</tr>
		<tr>
			<td>Author</td>
			<td>:</td>
			<td>
				<input type="text" name="author" value="<?php echo $queryKmkDetail->author ?>"></input>
			</td>
		</tr>

		<!-- inputan jenis radio button -->	
		<tr>
			<td>Favorite</td>
			<td>:</td>
			<td>
				<input type="radio" name="favorite" class="input-control" <?php if ($queryKmkDetail->favorite==1) echo "checked"; ?> value=1>1 &nbsp;&nbsp;&nbsp;</input>
				<input type="radio" name="favorite" class="input-control" <?php if ($queryKmkDetail->favorite==2) echo "checked"; ?> value=2>2 &nbsp;&nbsp;&nbsp;</input>
				<input type="radio" name="favorite" class="input-control" <?php if ($queryKmkDetail->favorite==3) echo "checked"; ?> value=3>3 &nbsp;&nbsp;&nbsp;</input>
				<input type="radio" name="favorite" class="input-control" <?php if ($queryKmkDetail->favorite==4) echo "checked"; ?> value=4>4 &nbsp;&nbsp;&nbsp;</input>
				<input type="radio" name="favorite" class="input-control" <?php if ($queryKmkDetail->favorite==5) echo "checked"; ?> value=5>5 </input>
			</td>
		</tr>

		<tr>
			<td colspan="3"><button type="submit">Update</button></td>
		</tr>
	</table>
	</form>
</body>
</html>