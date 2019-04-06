<?php 
include 'koneksi.php';
$QueryString = "SELECT * FROM transaksi_buku";
$SQL = mysqli_query($connect,$QueryString); 
?>

<!DOCTYPE html>
<html>
<head>
<title> Tampil Data</title>
</head>
<body>
<form method="post" action="caribuku02.php">
<input type="text" name="cari">
<input type="submit" name="kirim" value="cari">
</form>
<table border ="1">
<tr>
<th>NoFaktur</th>
<th>kodeBuku</th>
<th>judulBuku</th>
<th>jumlah</th>
<th>hargaJual</th>
<th>subTotal</th>
<th>total</th>

</tr>

<?php
foreach ($SQL as $ya){
echo "
<tr>
<td>$ya[noFaktur]</td>
<td>$ya[kodeBuku]</td>
<td>$ya[judulBuku]</td>
<td>$ya[jumlah]</td>
<td>$ya[hargaJual]</td>
<td>$ya[subTotal]</td>
<td>$ya[total]</td>
</tr>
";
}
?>

</table>
</body>
</html>
