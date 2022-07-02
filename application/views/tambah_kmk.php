<!DOCTYPE html>
<html>
<head>
	<title>Halaman Tambah</title>
</head>
<body>
	<h3>Tambah Data</h3>
	<tr>
		<td colspan="3"><button type="submit"><a href="javascript:window.history.go(-1);">Back</a></button></td>
	</tr>
	<br>
	<br>
	<form action="<?php echo base_url('home/fungsiTambah') ?>" method="post">
	<table>

		<!-- inputan jenis radio button -->
		<tr>
			<td>TYPE</td>
			<td>:</td>
			<td>
				<input type="radio" name="type" class="input-control" value="Manga">Manga &nbsp;&nbsp;&nbsp;</input>
				<input type="radio" name="type" class="input-control" value="Manhwa">Manhwa &nbsp;&nbsp;&nbsp;</input>
				<input type="radio" name="type" class="input-control" value="Manhua">Manhua</input>
			</td>
		</tr>
		<tr>
			<td>Nama Komik</td>
			<td>:</td>
			<td><input type="text" name="nama"></input></td>
		</tr>

		<!-- inputan jenis textarea -->
		<tr>
			<td>Genre</td>
			<td>:</td>
			<td>
				<textarea class="input-control" name="genre"></textarea>
			</td>
		</tr>
		<tr>
			<td>Author</td>
			<td>:</td>
			<td>
				<input type="text" name="author"></input>
			</td>
		</tr>

		<!-- inputan jenis radio button -->
		<tr>
			<td>Favorite</td>
			<td>:</td>
			<td>
				<input type="radio" name="favorite" class="input-control" value=1>1 &nbsp;&nbsp;&nbsp;</input>
				<input type="radio" name="favorite" class="input-control" value=2>2 &nbsp;&nbsp;&nbsp;</input>
				<input type="radio" name="favorite" class="input-control" value=3>3 &nbsp;&nbsp;&nbsp;</input>
				<input type="radio" name="favorite" class="input-control" value=4>4 &nbsp;&nbsp;&nbsp;</input>
				<input type="radio" name="favorite" class="input-control" value=5>5 </input>
			</td>
		</tr>
		<tr>
			<td colspan="3"><button type="submit">Create</button></td>
		</tr>
	</table>
	</form>
</body>
</html>