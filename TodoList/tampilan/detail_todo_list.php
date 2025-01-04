<?php
include '../auth/koneksi.php';

include '../auth/is_login.php';

$id = $_GET['id'];

$sql = "SELECT * FROM list WHERE id = $id";

$hasil = $koneksi->query($sql);

$item = $hasil->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail To do List</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-repeat: no-repeat;
            background-image: url(../assets/detail.jpg);
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">
        <div class="card text-center mb-4">
            <div class="card-header">
                <div class="text-center mb-1">
                    <label for="Tugas" class="form-label">
                        <h1>detail <span style="color: red;"> To </span> <span style="color: blue;"> do </span> <span style="color: yellow;"> List </span></h1>
                    </label>
                </div>
            </div>
            <div class="card-body">
                <div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="read_todo_list.php">To Do List</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Detail To Do List</li>
                        </ol>
                    </nav>
                </div>
                <div class="text-center">
                    <img src="gambar/<?php echo $item['gambar']; ?>" alt="Gambar Tugas" class="rounded mx-auto d-block img-thumbnail">
                </div>
                <div class="text-center mt-3 mb-3">
                    <label for="Tugas" class="form-label">
                        <h2><?php echo $item['tugas']; ?></h2>
                    </label>
                </div>
                <table class="table table-borderless">
                    <tr>
                        <td class="col-sm-4" style="font-weight: bold; font-size:20px;">Jangka Waktu</td>
                        <td style="font-weight: bold; font-size:20px;" class="col-sm-6"><?php echo $item['jangka_waktu']; ?></td>
                    </tr>
                    <tr>
                        <td class="col-sm-4" style="font-weight: bold; font-size:20px;">Keterangan</td>
                        <td style="font-weight: bold; font-size:20px;" class="col-sm-6"><?php echo $item['keterangan']; ?></td>
                    </tr>
                </table>
            </div>
            <div class="card-footer text-body-secondary">
                <p style="font-weight: bold; font-size:17px;" class="text-center mt-3">&copy;Detail To Do List</p>
            </div>
        </div>

    </div>

    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="dist/sweetalert2.all.min.js"></script>
</body>

</html>