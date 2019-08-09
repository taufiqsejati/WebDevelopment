<?php

include "atas.php";
include "koneksi.php";
echo"
<h2>Input Data Spesialis</h2>
<form method='POST' action='aksi_spesialis_input.php'>
<table border='0' width='100%'>

<tr>
<td>Kode Spesialis</td>
<td><input type=text name='kd_spesialis' size='50'></td>
</tr>

<tr>
<td>Nama Spesialis</td>
<td><input type=text name='nama_spesialis' size='50'></td>
</tr>

<tr>
<td>Proses</td><td><input type=submit value='Simpan'></td></tr>
</table>
</form>";
include "bawah.php";
?>