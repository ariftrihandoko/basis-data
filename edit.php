<html>
<head>
	<title>Tabel Pemain Bola</title>
</head>
<body>
 
	<h3>TABEL PEMAIN BOLA</h3>
	<br/>
	<a href="index.php">Kembali</a>
	<br/>
	<br/>
	<h3>Edit Data Pemain Bola</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from pemain_bola where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>No Punggung</td>
					<td><input type="number" name="no_punggung" value="<?php echo $d['no_punggung']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>