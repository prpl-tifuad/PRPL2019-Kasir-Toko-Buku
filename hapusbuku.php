<?php
include 'koneks.php';
$kodebuk = $_GET['kodebuk'];
$query="DELETE from buku where kodebuk='$kodebuk'";
mysqli_query($connect, $query);
header("location:tampilbuku2.php");
?>