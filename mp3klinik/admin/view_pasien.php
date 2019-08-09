 	 <?php
	 

 //proses mengambil data ke database untuk ditampilkan di form edit berdasarkan siswa_id yg didapatkan dari GET id -> edit.php?id=siswa_id
 
 //include atau memasukkan file koneksi ke database
 include('koneksi.php');
 include('atas.php');
 
 //membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
 $kd_pasien = $_GET['id'];
$query = mysqli_query($koneksi,"SELECT * FROM pasien WHERE kd_pasien='$_GET[id]'");
 ?>
		
		<h2>View Data Pasien</h2>
		
		 <?php while($r = mysqli_fetch_assoc($query)){ ?>
		 <table border = '0' width='100%'>
		 <form action="pasien.php">
    
		<tr>
			<td>Kode Pasien</td> 
				<td><?php echo $r['kd_pasien']; ?></td>
		</tr>
        <tr>
			<td>Nama Pasien </td>
				<td><?php echo $r['nama_pasien']; ?></td>
		</tr>
		<tr>
			<td>Jenis Kelamin  </td>
			<td><?php
                                $jk = $r['jk'];
                                if ($jk == "Laki-Laki") {
                                    echo ' Laki-Laki';
                                } else {
                                    echo 'Perempuan';
                                }
                                ?></td>
		</tr>
		<tr>
			<td>Tanggal Lahir  </td>
				<td><?php echo $r['tgl_lahir']; ?></td>
		</tr>
		
		<tr> 
			<td>Agama </td>
				<td><?php echo $r['agama']; ?></td>
		</tr>
		<tr> 
			<td>Alamat </td>
				<td><?php echo $r['alamat']; ?></td>
		</tr>
		<tr> 
			<td>Telepon </td>
				<td> <?php echo $r['telp']; ?></td>
		</tr>
        <tr>
			<td>Proses </td> 
			<td><input type="submit" name="submit" value="Back"></td>
		</tr>
		</form>
	</table>
    <?php
    } // end while
 
   
	include "bawah.php";

    ?>