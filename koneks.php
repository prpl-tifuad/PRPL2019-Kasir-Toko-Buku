<?php

$connect= new mysqli("localhost","root", "","tokobuku");

if($connect){
echo "Berhasil Terkoneksi";
}else{
echo "Gagal Terkoneksi";
}

?>