<?php
include "koneksi.php";
mysqli_query($koneksi, "UPDATE pemeriksaaan SET 

				tgl_pemeriksaan ='$_POST[tgl_pemeriksaan]',
				kd_pasien='$_POST[kd_pasien]',
				kd_dokter='$_POST[kd_dokter]',
				keluhan='$_POST[keluhan]',
				tindakan='$_POST[tindakan]',
				jasa_adm='$_POST[jasa_adm]',
				jasa_dokter='$_POST[jasa_dokter]',
				biaya_obat='$_POST[biaya_obat]'
				WHERE id_pemeriksaan='$_POST[id_pemeriksaan]'");
echo"<a href='pemeriksaan.php'> Data Sudah Masuk..!</a>";
?>


