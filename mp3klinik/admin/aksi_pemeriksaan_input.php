<?php
include "koneksi.php";
mysqli_query($koneksi, "INSERT INTO pemeriksaaan(id_pemeriksaan,tgl_pemeriksaan,kd_pasien,kd_dokter,keluhan,tindakan,jasa_adm,jasa_dokter,biaya_obat)
VALUES ('$_POST[id_pemeriksaan]',
				'$_POST[tgl_pemeriksaan]',
				'$_POST[kd_pasien]',
				'$_POST[kd_dokter]',
				'$_POST[keluhan]',
				'$_POST[tindakan]',
				'$_POST[jasa_adm]',
				'$_POST[jasa_dokter]',
				'$_POST[biaya_obat]')");
echo"<a href='pemeriksaan.php'> Data Sudah Masuk..!</a>";
?>


