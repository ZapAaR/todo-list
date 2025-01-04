<?php

$namaserver= "localhost";
$username= "root";
$password= "";
$namadatabase= "todo_list";

$koneksi = new mysqli($namaserver, $username, $password, $namadatabase);

if($koneksi->connect_error){
    die("koneksi gagal:" . $koneksi->connect_error);
}
?>