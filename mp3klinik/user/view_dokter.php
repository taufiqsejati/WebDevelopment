<?php
//proses mengambil data ke database untuk ditampilkan di form edit berdasarkan siswa_id yg didapatkan dari GET id -> edit.php?id=siswa_id
//include atau memasukkan file koneksi ke database
include "koneksi.php";
include "atas.php";

//membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
$kd_dokter = $_GET['id'];
$query = mysqli_query($koneksi, "select * from dokter where kd_dokter='$_GET[id]'");
?>

		
		<h2>View Data Dokter</h2>
		
		 <?php while ($row = mysqli_fetch_assoc($query)) { 
		 					$tampil2=mysqli_query($koneksi,"SELECT * FROM spesialis WHERE kd_spesialis='$row[kd_spesialis]'");
$r2= mysqli_fetch_array($tampil2);
?>
		 <table border = '0' width='100%'>
		  <form action="dokter.php" method="post">
    
		<tr>
			<td>Kode Dokter</td> 
				<td> <?php echo $row['kd_dokter']; ?> </td>
		</tr>
        <tr>
			<td>Nama Dokter </td>
				<td> <?php echo $row['nama_dokter']; ?></td>
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
			<td>Kota </td>
				<td> <?php echo $row['kota']; ?> </td>
		</tr>
		<tr> 
			<td>Foto </td>
				<td> <img src="foto/<?php echo $row['foto']; ?>" width='100' height='100'/></td>
		</tr>
		
		<tr> 
			<td>Kode Spesialis</td>
				<td> <?php echo $row['kd_spesialis']; ?> | <?php echo $r2['nama_spesialis']?></td>
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
