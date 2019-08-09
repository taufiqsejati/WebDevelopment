<?php

include "atas.php";
include "koneksi.php";
echo"
<h2>Input Data Pemeriksaan</h2>
<form method='POST' action='aksi_pemeriksaan_input.php'>
<table border='0' width='100%'>

<tr>
<td>Id Pemeriksaan</td>
<td><input type=text name='id_pemeriksaan' size='50'></td>
</tr>

<tr>
<td>Tanggal Pemeriksaan</td>
<td><input type=date name='tgl_pemeriksaan' size='50'></td>
</tr>

<tr>
<td>Kode Pasien</td>
<td><input type=text name='kd_pasien' size='50'></td>
</tr>

<tr>
<td>Kode Dokter</td>
<td><input type=text name='kd_dokter' size='50'></td>
</tr>

<tr>
<td>Keluhan</td>
<td><input type=text name='keluhan' size='50'></td>
</tr>

<tr>
<td>Tindakan</td>
<td><input type=text name='tindakan' size='50'></td>
</tr>

<tr>
<td>Jasa Administrasi</td>
<td><input type=text name='jasa_adm' size='50'></td>
</tr>

<tr>
<td>Jasa Dokter</td>
<td><input type=text name='jasa_dokter' size='50'></td>
</tr>

<tr>
<td>Biaya Obat</td>
<td><input type=text name='biaya_obat' size='50'></td>
</tr>

<tr>
<td>Proses</td><td><input type=submit value='Simpan'></td></tr>
</table>
</form>";
include "bawah.php";
?>