<?php 
include 'koneks.php';
$QueryString = "SELECT * FROM buku";
$SQL = mysqli_query($connect,$QueryString); 
?>

<!DOCTYPE html>
<html>
<head>
<title> Tampil Data</title>
</head>
<body>
<form method="post" action="caribuku.php">
<input type="text" name="cari">
<input type="submit" name="kirim" value="cari">
</form>
<table border ="1">
<tr>
<th>kodebuk</th>
<th>judul</th>
<th>ket</th>
<th>penerbit</th>
<th>penulis</th>
<th>harga</th>
<th>aksi</th>
</tr>

<?php
foreach ($SQL as $ya){
echo "
<tr>
<td>$ya[kodebuk]</td>
<td>$ya[judul]</td>
<td>$ya[ket]</td>
<td>$ya[penerbit]</td>
<td>$ya[penulis]</td>
<td>$ya[harga]</td>

<td><a href='editbuku.php?kodebuk=$ya[kodebuk]'>Edit</a>
               <a href='hapusbuku.php?kodebuk=$ya[kodebuk]'>Delete</a>
            </td>
			
</tr>
";
}
?>

</table>
</body>
</html>
