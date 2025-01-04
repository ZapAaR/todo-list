<?php
include '../auth/koneksi.php';

include 'header.php';

$sql = "select * from list";
$hasil = $koneksi->query($sql);

?>

<?php
    if (isset($_SESSION['alert'])) {

    ?>
      <div class="container">
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data</strong> <?php echo $_SESSION['alert']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      </div>
    <?php
      unset($_SESSION['alert']);
    }
    ?>

<?php
    if (isset($_SESSION['hapus'])) {

    ?>
<div class="container">
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data</strong> <?php echo $_SESSION['hapus']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
</div>
    <?php
      unset($_SESSION['hapus']);
    }
    ?>

<?php
    if (isset($_SESSION['ubah'])) {

    ?>
<div class="container">
      <div class="alert alert-info alert-dismissible fade show" role="alert">
        <strong>Data</strong> <?php echo $_SESSION['ubah']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
</div>
    <?php
      unset($_SESSION['ubah']);
    }
    ?>

<div class="container mt-4">
  <div class="card">
    <div class="card-header text-center" style="font-weight: bold; font-size:23px;">
      Todo List
    </div>
    <div class="card-body">
      <a href="create_todo_list.php" class="btn btn-primary mb-3"><i class="bi bi-pencil-fill"></i> Buat Tugas</a>
      <table class="table table-hover " id="myTable">
        <thead class="table-dark">
          <tr>
            <th>No</th>
            <th>Tugas</th>
            <th>Jangka Waktu</th>
            <th>Keterangan</th>
            <th>action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          while ($item = $hasil->fetch_assoc()) {
          ?>

            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $item['tugas']; ?></td>
              <td><?php echo date('d/m/Y', strtotime($item['jangka_waktu'])); ?></td>
              <td><?php echo $item['keterangan']; ?></td>
              <td>
                <a href="detail_todo_list.php?id=<?php echo $item['id']; ?>" class="btn btn-info"><i class="bi bi-eye-fill"></i> Detail</a>
                <a href="update_todo_list.php?id=<?php echo $item['id']; ?>" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Ubah</a>
                <a href="hapus_todo_list.php?id=<?php echo $item['id']; ?>"  class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="bi bi-trash-fill"></i> Hapus</a>
              </td>
            </tr>

          <?php } ?>
        </tbody>
      </table>
    </div>
    <div class="card-footer text-body-secondary text-center" style="font-weight: bold; font-size:18px;">
      &copy; Todo list
    </div>
  </div>
</div>
<div class="mb-3"></div>
<?php include 'footer.php'; ?>