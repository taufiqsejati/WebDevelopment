<?php
//proses mengambil data ke database untuk ditampilkan di form edit berdasarkan siswa_id yg didapatkan dari GET id -> edit.php?id=siswa_id
//include atau memasukkan file koneksi ke database
include "koneksi.php";
include "atas.php";

//membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
$id_nilai = $_GET['id'];
$query = mysqli_query($koneksi, "select * from nilai where id_nilai='$_GET[id]'");
?>

		
		<h2>View Data Nilai</h2>
		
		 <?php while ($row = mysqli_fetch_assoc($query)) { 
		 	$tampil2=mysqli_query($koneksi,"SELECT * FROM siswa WHERE nis='$row[nis]'");
$r2= mysqli_fetch_array($tampil2);
$tampil3=mysqli_query($koneksi,"SELECT * FROM mapel WHERE kd_mapel='$row[kd_mapel]'");
$r3= mysqli_fetch_array($tampil3);

	$rata2 = ($row['nilai_harian']+$row['nilai_uts']+$row['nilai_uas'])/3;
	if ($rata2 >50){
		$ket = 'Anda Lulus';
	}else {
		$ket = 'Anda Tidak Lulus';
	}
?>
		 <table border = '0' width='100%'>
		  <form action="nilai.php" method="post">
    
		<tr>
			<td>Id Nilai </td> 
				<td> <?php echo $row['id_nilai']; ?> </td>
		</tr>
		<tr> 
			<td>Nama Siswa</td>
				<td> <?php echo $row['nis'];?> | <?php echo $r2['nama'];?>  </td>
		</tr>		
		<tr> 
			<td>Mata Pelajaran</td>
				<td> <?php echo $row['kd_mapel'];?> | <?php echo $r3['nama_mapel'];?>  </td>
		</tr>
        <tr>
			<td>Nilai Harian </td>
				<td> <?php echo $row['nilai_harian']; ?></td>
		</tr>
		<tr> 
			<td>Nilai Uts </td>
				<td> <?php echo $row['nilai_uts']; ?> </td>
		</tr>
		<tr> 
			<td>Nilai Uas </td>
				<td> <?php echo $row['nilai_uas']; ?> </td>
		</tr>
		<tr> 
			<td>Rata2 </td>
				<td> <?php echo $rata2; ?> </td>
		</tr>
		<tr> 
			<td>Keterangan </td>
				<td> <?php echo $ket; ?> </td>
		</tr>
        <tr>
			<td>Proses </td> 
			<td><input type="submit" name="submit" value="Back"></td>
		</tr>
		</form>

	</table>
    
<?php
} // end while
mysqli_close($koneksi); // menutup koneksi ke database
include "bawah.php";

?>
