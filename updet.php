<?php
include 'koneks.php';
$kodebuk   = $_POST['kodebuk'];
$judul     = $_POST['judul'];
$ket      = $_POST['ket'];
$penerbit   = $_POST['penerbit'];
$penulis  = $_POST['penulis'];
$harga  = $_POST['harga'];
$query="UPDATE buku SET kodebuk='$kodebuk',judul='$judul',ket='$ket',penerbit='$penerbit',penulis='$penulis',harga='$harga' where 
kodebuk='$kodebuk'";
mysqli_query($connect,$QueryString);
$sql =mysqli_query($connect,$query);
header("location:tampilbuku2.php");
?>