<?php
include("koneks.php");
$folder="aplot/";
$nourut=kode_auto("buku","kodebuk","B",1,4);
$tujuan=$folder.$nourut.".jpg";
$sql="insert into buku(kodebuk,judul,ket,penerbit,penulis,harga) value('$nourut','$_POST[txtkodebuk]','$_POST[txtjudul]',
'$_POST[txtket]','$_POST[txtpenerbit]','$_POST[txtpenulis]','$_POST[txtharga]')";
$data=mysqli_query($konek,$sql);
if($data)
{
	if(move_uploaded_file($_FILES['txtfoto']['tmp_name'],$tujuan))
	{
		echo"data sudah disimpan";
	}}
	else
	{
		echo"data belum disimpan";
	}
	
?>