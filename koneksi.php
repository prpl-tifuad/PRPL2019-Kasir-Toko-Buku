<?php

$connect = new mysqli("localhost","root","","kasir_toko_buku");
	
if($connect){
	echo "Berhasil Terkoneksi";
}else{
	echo "Gagal Terkoneksi";
}

?>