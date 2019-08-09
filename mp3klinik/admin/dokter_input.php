<?php

include "atas.php";
include "koneksi.php";
echo"
<h2>Input Data Dokter</h2>
<form method='POST' action='aksi_dokter_input.php'>
<table border='0' width='100%'>

<tr>
<td>Kode Dokter</td>
<td><input type=text name='kd_dokter' size='50'></td>
</tr>

<tr>
<td>Nama Dokter</td>
<td><input type=text name='nama_dokter' size='50'></td>
</tr>

<tr>
<td>Jenis Kelamin</td>
<td><label><input type=radio name='jk' value='L'> Laki-laki</label>
<label><input type=radio name='jk' value='P'>Perempuan</label>
</tr>

<tr>
<td>Agama</td>
<td><select name='agama'>
<option>Islam</option>
<option>Kristen</option>
<option>Hindu</option>
<option>Budha</option>
<option>Atheis</option>
</select>
</td>
</tr>

<tr>
<td>Alamat</td>
<td><input type=text name='alamat' size='50'></td>
</tr>

<tr>
<td>Kota</td>
<td><input type=text name='kota' size='50'></td>
</tr>

<tr>
<td>Telpon</td>
<td><input type=text name='telp' size='50'></td>
</tr>

<tr>
<td>Foto</td>
<td><input type=text name='foto' size='50'></td>
</tr>

<tr>
<td>Kode Spesialis</td>
<td><input type=text name='kd_spesialis' size='50'></td>
</tr>

<tr>
<td>Proses</td><td><input type=submit value='Simpan'></td></tr>
</table>
</form>";
include "bawah.php";
?>