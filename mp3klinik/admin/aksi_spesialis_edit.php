<?php
include "koneksi.php";
mysqli_query($koneksi, "UPDATE spesialis SET 

				nama_spesialis ='$_POST[nama_spesialis]'
				WHERE kd_spesialis='$_POST[kd_spesialis]'");
echo"<a href='spesialis.php'> Data Sudah Di Edit..!</a>";
?>


