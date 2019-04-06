<?php
?>

<html>
<head>
	<title>Input Data Buku</title>
</head>
<?php
	if(isset($_POST['kirim'])){
		include 'koneks.php';
		
		$kodebuk = $_POST['kodebuk'];
		$judul = $_POST['judul'];
		$ket = $_POST['ket'];
		$penerbit = $_POST['penerbit'];
		$penulis = $_POST['penulis'];
		$harga = $_POST['harga'];
		
		$query = "INSERT INTO buku VALUES ('$kodebuk','$judul','$ket','$penerbit','$penulis','$harga')";
		$sql = mysqli_query($connect,$query);
		
		echo"INPUT BERHASIL<br>";
		echo "<a href='tampilbuku.php'>Lihat Hasil</a>";
	}
?>
<body>
INPUT DATA BUKU
<form method="post" action="inputbuku.php">
	<table>
		<tr>
			<td>kodebuk</td>
			<td> : </td>
			<td><input type="text" name="kodebuk"></td>
		</tr>
		<tr>
			<td>judul</td>
			<td> : </td>
			<td><input type="text" name="judul"></td>
		</tr>
		<tr>
			<td>ket</td>
			<td> : </td>
			<td><input type="text" name="ket"></td>
		</tr>
		<tr>
			<td>penerbit</td>
			<td> : </td>
			<td><input type="text" name="penerbit"></td>
		</tr>
		<tr>
			<td>penulis</td>
			<td> : </td>
			<td><input type="text" name="penulis"></td>
		</tr>
		<tr>
			<td>harga</td>
			<td> : </td>
			<td><input type="text" name="harga"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="kirim" value="Kirim">
		</tr>
	</table>
</form>
</body>
</html>