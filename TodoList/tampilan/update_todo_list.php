<?php
include '../auth/koneksi.php';
include 'header.php';

$id = intval($_GET['id']); // Sanitasi input ID untuk mencegah SQL Injection

$sql = "SELECT * FROM list WHERE id = $id";
$hasil = $koneksi->query($sql);

if ($hasil->num_rows > 0) {
    $item = $hasil->fetch_assoc();
} else {
    echo "<div class='alert alert-danger'>Data tidak ditemukan.</div>";
}
?>



<div class="container mt-5">
    <div class="card">
        <h5 class="card-header">Update Tugas</h5>
        <div class="card-body">
            <form action="proses_update_todo_list.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <table class="table table-borderless">
                    <tr>
                        <td><i class="bi bi-pin-angle-fill"></i> Tugas</td>
                        <td><input class="form-control" type="text" name="tugas" placeholder="tugas..." value="<?php echo $item['tugas']; ?>" required></td>
                    </tr>
                    <tr>
                        <td><i class="bi bi-calendar3"></i> Jangka Waktu</td>
                        <td><input class="form-control" type="date" name="jangka_waktu" value="<?php echo $item['jangka_waktu']; ?>" required></td>
                    </tr>
                    <tr>
                        <td><i class="bi bi-info-square-fill"></i> Keterangan</td>
                        <td>
                            <select class="form-select" name="keterangan" required>
                                <option selected disabled>--- Keterangan ---</option>
                                <option value="belum selesai" <?php echo ($item['keterangan'] == "belum selesai") ? 'selected' : ''; ?>>Belum Selesai</option>
                                <option value="sudah selesai" <?php echo ($item['keterangan'] == "sudah selesai") ? 'selected' : ''; ?>>Sudah Selesai</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="bi bi-upload"></i> Upload Gambar</td>
                        <td><input class="form-control" type="file" name="gambar"></td>
                    </tr>
                    <tr>
                        <td><i class="bi bi-card-image"></i> Gambar Saat Ini</td>
                        <td>
                            <div class="image-wrapper">
                                <img src="gambar/<?php echo $item['gambar']; ?>" alt="Gambar Tugas" style="max-width: 200px;">
                            </div>
                            <input type="hidden" name="fotolama" value="<?php echo $item['gambar'] ?>">
                        </td>
                    </tr>
                </table>
                <button type="submit" name="update" class="btn btn-primary"><i class="bi bi-floppy2-fill"></i> Update</button>
                <a href="read_todo_list.php" class="btn btn-secondary"><i class="bi bi-reply"></i> Kembali</a>
            </form>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>