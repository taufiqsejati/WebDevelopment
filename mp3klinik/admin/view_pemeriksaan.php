 	 <?php
	 

 //proses mengambil data ke database untuk ditampilkan di form edit berdasarkan siswa_id yg didapatkan dari GET id -> edit.php?id=siswa_id
 
 //include atau memasukkan file koneksi ke database
 include"koneksi.php";
 include"atas.php";
 
 //membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
 $id_pemeriksaan = $_GET['id'];
$query = mysqli_query($koneksi,"SELECT * FROM pemeriksaaan where id_pemeriksaan='$_GET[id]'");
 
 ?>
		
		<h2>View Data Pemeriksaan</h2>
		
		 <?php while($r = mysqli_fetch_assoc($query)){ 
$tampil2=mysqli_query($koneksi,"SELECT * FROM pasien WHERE kd_pasien='$r[kd_pasien]'");
$r2= mysqli_fetch_array($tampil2);
$tampil3=mysqli_query($koneksi,"SELECT * FROM dokter WHERE kd_dokter='$r[kd_dokter]'");
$r3= mysqli_fetch_array($tampil3);
?>
		 <table border = '0' width='100%'>
		  <form action="pemeriksaan.php">
    
		<tr>
			<td>Id Pemeriksaan</td> 
				<td><?php echo $r['id_pemeriksaan']; ?></td>
		</tr>
       
		<tr>
			<td>Tanggal Pemeriksaan  </td>
				<td><?php echo $r['tgl_pemeriksaan']; ?></td>
		</tr>
		<tr>
			<td>Kode Pasien</td> 
				<td><?php echo $r['kd_pasien']; ?> | <?php echo $r2['nama_pasien'] ?></td>
		</tr>
		<tr>
			<td>Kode Dokter</td> 
				<td><?php echo $r['kd_dokter']; ?> | <?php echo $r3['nama_dokter']?></td>
		</tr>
		<tr>
			<td>Keluhan</td> 
				<td><?php echo $r['keluhan']; ?></td>
		</tr>
		<tr>
			<td>Tindakan</td> 
				<td><?php echo $r['tindakan']; ?></td>
		</tr>
		<tr>
			<td>Jasa Administrasi</td> 
				<td><?php echo $r['jasa_adm']; ?></td>
		</tr>
		<tr>
			<td>Jasa Dokter</td> 
				<td><?php echo $r['jasa_dokter']; ?></td>
		</tr>
		<tr>
			<td>Biaya Obat</td> 
				<td><?php echo $r['biaya_obat']; ?></td>
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