<?php
$host="localhost";
$user="root";
$password="";
$db="19025_psas";

$koneksi = mysqli_connect($host,$user,$password,$db);
if (!$koneksi) {
    echo ("gagal terkoneksi : ". mysqli_connect_error());
}

?>