<?php

include "atas.php";
include "koneksi.php";
echo"
<h2>Input Data Pasien</h2>
<form method='POST' action='aksi_pasien_input.php'>
<table border='0' width='100%'>

<tr>
<td>Kode Pasien</td>
<td><input type=text name='kd_pasien' size='50'></td>
</tr>

<tr>
<td>Nama Pasien</td>
<td><input type=text name='nama_pasien' size='50'></td>
</tr>

<tr>
<td>Jenis Kelamin</td>
<td><input type=text name='jk' size='50'></td>
</tr>

<tr>
<td>Tanggal Lahir</td>
<td><input type=date name='tgl_lahir' size='50'></td>
</tr>

<tr>
<td>Agama</td>
<td><input type=text name='agama' size='50'></td>
</tr>

<tr>
<td>Alamat</td>
<td><input type=text name='alamat' size='50'></td>
</tr>

<tr>
<td>Telpon</td>
<td><input type=text name='telp' size='50'></td>
</tr>

<tr>
<td>Proses</td><td><input type=submit value='Simpan'></td></tr>
</table>
</form>";
include "bawah.php";
?>