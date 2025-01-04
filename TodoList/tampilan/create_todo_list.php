<?php
include '../auth/koneksi.php';
include 'header.php';

//Tangkap input user 
if (isset($_POST['buat'])) {
    $tugas = $_POST['tugas'];
    $jangka_waktu = $_POST['jangka_waktu'];
    $keterangan = $_POST['keterangan'];
    //Tangkap Gambar
    $tmp = $_FILES['gambar']['tmp_name'];
    $gambar = $_FILES['gambar']['name'];

    //menyimpan secara permanen
    move_uploaded_file($tmp, 'gambar/' . $gambar);

    //Membuat Query
    $sql = "insert into list(tugas, jangka_waktu, keterangan, gambar) values('$tugas', '$jangka_waktu', '$keterangan', '$gambar')";
    //mengeksekusi query
    $hasil = mysqli_query($koneksi, $sql);

    if ($hasil) {
        $_SESSION['alert']= "To Do List Telah Ditambakan";
        header("location:read_todo_list.php");
    } else {
        $_SESSION['alert']= "To Do List Telah Gagal Ditambakan";
        header("location:create_todo_list.php");
    }
}
?>

<div class="container mt-5">
    <div class="card">
        <h5 class="card-header">Buat Tugas</h5>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="Tugas" class="form-label"><i class="bi bi-pin-angle-fill"></i> Tugas</label>
                    <input class="form-control" type="text" placeholder="Tugas..." aria-label="default input example" name="tugas" required>
                </div>
                <div class="mb-3">
                    <label for="Jangka Waktu" class="form-label"><i class="bi bi-calendar3"></i> Jangka Waktu</label>
                    <input class="form-control" type="date" placeholder="Jangka Waktu..." aria-label="default input example" name="jangka_waktu" required>
                </div>
                <div class="mb-3">
                    <label for="Keterangan" class="form-label"><i class="bi bi-info-square-fill"></i> Keterangan</label>
                    <select class="form-select" name="keterangan" required>
                                <option selected disabled>--- Keterangan ---</option>
                                <option value="belum selesai">Belum Selesai</option>
                                <option value="sudah selesai">Sudah Selesai</option>
                            </select>
                </div>
                <div class="mb-3">
                    <label for="Upload Gambar" class="form-label"><i class="bi bi-upload"></i> Upload Gambar</label>
                    <input class="form-control" type="file" placeholder="Upload Gambar..." aria-label="default input example" name="gambar" required>
                </div>
                <br>
                <button type="submit" class="btn btn-success" name="buat" id="liveAlertBtn"><i class="bi bi-pencil-fill"></i> Buat</button>
                <a href="read_todo_list.php" class="btn btn-secondary"><i class="bi bi-reply"></i> Kembali</a>
            </form>
        </div>
    </div>
</div>



<?php include 'footer.php'; ?>