<?php
session_start();

include '../auth/koneksi.php';

$id = $_GET['id'];

$gambar = $_GET['gambar'];

// hapus Gambar
unlink('gambar/'.$gambar);

$sql = mysqli_query($koneksi, "delete from list where id='$id'");

if($sql){
    $_SESSION['hapus'] = "To Do List Telah Di Hapus";
    header("location:read_todo_list.php");
}


?>