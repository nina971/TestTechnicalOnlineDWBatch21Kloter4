<?php 
$host = "127.0.0.1";
$user = "root";
$pass = "123456";
$dbname = "dealer_mobil";

$conn = mysqli_connect($host,$user,$pass,$dbname);

if(!$conn){
  die("Koneksi gagal: ".mysqli_connect_error());
}

?>