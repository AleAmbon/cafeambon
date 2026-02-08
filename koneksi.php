<?php
$koneksi = mysqli_connect("localhost","root","","cafe_ambon");

if(!$koneksi){
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
