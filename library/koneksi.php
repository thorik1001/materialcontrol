<?php
//this function created by thorik
// definisikan koneksi ke database
$server = "localhost";
$username = "root";
$password = "password";
$database = "dutadb";

mysql_connect($server,$username,$password) or die("Koneksi gagal");
mysql_select_db($database) or die("Database tidak bisa dibuka");
?>
