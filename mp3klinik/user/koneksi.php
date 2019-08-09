<?php 
$server = "127.0.0.1";
$username = "root";
$password= "";
$database= "dbklinikmp3";
$koneksi = mysqli_connect($server, $username, $password, $database)
or die("Database tidak bisa dibuka");
?> 