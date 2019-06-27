<?php
include 'koneks.php';
$kodebuk         = $_GET['kodebuk'];
$buku  = mysqli_query($connect, "select * from buku where kodebuk='$kodebuk'");
$ya    = mysqli_fetch_array($buku);

?>

<!DOCTYPE html>
<html>
    <body>
        <form method="post" action="updet.php">
            <input type="hidden" value="<?php echo $ya['kodebuk'];?>" name="kodebuk">
            <table>
               <tr>

			   <tr><td>kodebuk</td><td><input type="text" value="<?php echo $ya['kodebuk'];?>" name="kodebuk"></td></tr>
                <tr><td>judul</td><td><input type="text" value="<?php echo $ya['judul'];?>" name="judul"></td></tr>
                <tr><td>ket</td><td><input type="text" value="<?php echo $ya['ket'];?>" name="ket"></td></tr>
			   <tr><td>penerbit</td><td><input type="text" value="<?php echo $ya['penerbit'];?>" name="penerbit"></td></tr>
				<tr><td>penulis</td><td><input type="text" value="<?php echo $ya['penulis'];?>" name="penulis"></td></tr>
				<tr><td>harga</td><td><input type="text" value="<?php echo $ya['harga'];?>" name="harga"></td></tr>
			   
<tr><td colspan="2"><button type="submit" value="simpan">SIMPAN PERUBAHAN</button>
                        <a href="tampilbuku2.php">Kembali</a></td></tr>

            </table>
        </form>
    </body>
</html>