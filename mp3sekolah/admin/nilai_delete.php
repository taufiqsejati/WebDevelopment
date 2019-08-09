<?php
include "koneksi.php";
mysqli_query($koneksi," DELETE FROM nilai WHERE id_nilai='$_GET[id]'");
echo "<a href='nilai.php'>Data Sudah Dihapus Bro...!</a>";
?>