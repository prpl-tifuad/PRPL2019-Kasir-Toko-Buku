<?php
include 'koneksi.php';
$key = $_POST['cari'];
echo " <br/> keyword pencarian = $key" ;
$QueryString = "SELECT * FROM transaksi_buku WHERE judulBuku LIKE '%$key%'";
$SQL = mysqli_query($connect, $QueryString);
if(mysqli_num_rows($SQL)>0){
	
	?>
	<table border="1">
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
<?php }
else{
	echo "<br>DATA TIDAK DITEMUKAN";
}
?>