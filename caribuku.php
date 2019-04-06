<?php
include 'koneks.php';
$key = $_POST['cari'];
echo "keyword pencarian = $key";
$QueryString = "SELECT * FROM buku WHERE judul LIKE '%$key%'";
$SQL = mysqli_query($connect, $QueryString);
if(mysqli_num_rows($SQL)>0){
	
	?>
	
	<table border="1">
	<tr>
	<th>kodebuk</th>
	<th>judul</th>
	<th>ket</th>
	<th>penerbit</th>
	<th>penulis</th>
	<th>harga</th>
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