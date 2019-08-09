<?php
include "atas.php";
include "koneksi.php";
echo"
<h2>Input Data Nilai</h2>
<form method='POST' action='aksi_nilai_input.php'>
	<table border='0' width='100%'>
	<tr><td>ID Nilai</td><td><input type=text name='id_nilai' size='10'></td></tr>
	
	<tr><td>Nomor Induk Siswa</td><td><input type=text name='nis' size='10'></td></tr>
	
		<tr><td>Kode Mata Pelajaran</td><td><input type=text name='kd_mapel' size='10'></td></tr>
		
			<tr><td>Nilai Harian</td><td><input type=text name='nilai_harian' size='10'></td></tr>
			
				<tr><td>Nilai UTS</td><td><input type=text name='nilai_uts' size='10'></td></tr>
				
					<tr><td>Nilai UAS</td><td><input type=text name='nilai_uas' size='10'></td></tr>
	
	<tr><td>Proses</td><td><input type='submit' value='Simpan'></td></tr>
	</table>
</form>";
include "bawah.php"
?>