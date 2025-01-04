<?php
include '../auth/koneksi.php';
session_start();
//Tangkap input user 
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $tugas = $_POST['tugas'];
    $jangka_waktu = $_POST['jangka_waktu'];
    $keterangan = $_POST['keterangan'];
    $foto_lama = $_POST['fotolama'];
    //Tangkap Gambar
    $tmp = $_FILES['gambar']['tmp_name'];
    $gambar = $_FILES['gambar']['name'];

    //cek jika ada foto baru
    if ($gambar) {
        //hapus gambar lama
        unlink('gambar/' . $foto_lama);
        //menyimpan secara permanen
        move_uploaded_file($tmp, 'gambar/' . $gambar);

        //Membuat Query
        $sql = "update list set tugas = '$tugas', jangka_waktu='$jangka_waktu', keterangan = '$keterangan', gambar = '$gambar' where id = '$id'";
    } else {
        $sql = "update list set tugas = '$tugas', jangka_waktu='$jangka_waktu', keterangan = '$keterangan' where id = '$id'";
    }

    //mengeksekusi query
    $hasil = mysqli_query($koneksi, $sql);

    if ($hasil) {
        $_SESSION['ubah'] = "To Do List Telah Di Ubah";
        header("location:read_todo_list.php");
    }
}
