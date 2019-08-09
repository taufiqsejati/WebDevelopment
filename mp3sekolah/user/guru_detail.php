<?php
//proses mengambil data ke database untuk ditampilkan di form edit berdasarkan siswa_id yg didapatkan dari GET id -> edit.php?id=siswa_id
//include atau memasukkan file koneksi ke database
include "koneksi.php";
include "atas.php";

//membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
$nip = $_GET['id'];
$query = mysqli_query($koneksi, "select * from guru where nip='$_GET[id]'");
?>

		
		<h2>View Data Guru</h2>
		
		 <?php while ($row = mysqli_fetch_assoc($query)) { 
		 	$tampil2=mysqli_query($koneksi,"SELECT * FROM mapel WHERE kd_mapel='$row[kd_mapel]'");
$r2= mysqli_fetch_array($tampil2);
?>
		 <table border = '0' width='100%'>
		  <form action="guru.php" method="post">
    
		<tr>
			<td>Nomor Induk Pengajar</td> 
				<td> <?php echo $row['nip']; ?> </td>
		</tr>
        <tr>
			<td>Nama Guru </td>
				<td> <?php echo $row['nama']; ?></td>
		</tr>
		<tr> 
			<td>Mata Pelajaran </td>
				<td> <?php echo $row['kd_mapel'];?> | <?php echo $r2['nama_mapel'];?>  </td>
		</tr>
        <tr>
			<td>Tanggal Lahir </td>
				<td> <?php echo $row['tanggal_lahir']; ?></td>
		</tr>
		<tr>
			<td>Jenis Kelamin  </td>
			<td> <?php
    $jk = $row['jk'];
    if ($jk == "Laki-Laki") {
        echo ' Laki-Laki';
    }
    else {
        echo 'Perempuan';
    } ?>
</td>
		</tr>
		
		<tr> 
			<td>Agama </td>
				
				<td> <?php echo '' . $row['agama']; ?> </td>
		</tr>
		<tr> 
			<td>Alamat </td>
				<td> <?php echo $row['alamat']; ?> </td>
		</tr>
		<tr> 
			<td>Telepon </td>
				<td> <?php echo $row['telp']; ?></td>
		</tr>
		<tr> 
			<td>Tahun Mengajar </td>
				<td> <?php echo $row['tahun_mengajar']; ?> </td>
		</tr>
		<tr> 
			<td>Alamat </td>
				<td> <?php echo $row['alamat']; ?> </td>
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
