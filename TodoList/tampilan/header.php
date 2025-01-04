<?php

include '../auth/is_login.php';

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halaman Todo List</title>
  <!-- Menambahkan CSS Bootstrap -->
<link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<!-- Data Tables Bootstrap -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css"/>

<!-- icon -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="carousel.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<!-- sweetalert2 -->
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <div class="clearfix">
    <nav class="navbar navbar-expand-lg p-3" aria-label="Thirteenth navbar example" style="background-color: #074799;">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
          <a class="navbar-brand col-lg-3 me-0" href="index.php" style="color: white; font-weight:bold; font-size:20px;"><span style="color:#A888B5;">Todo</span> List</a>
          <ul class="navbar-nav col-lg-6 justify-content-lg-center">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php" style="color: white;"><i class="bi bi-house-fill"></i> Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="read_todo_list.php" style="color: white;"><i class="bi bi-file-earmark-text"></i> Todo List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tentang.php" style="color: white;"><i class="bi bi-info-circle-fill"></i> Tentang</a>
            </li>
          </ul>
          <div class="d-lg-flex col-lg-3 justify-content-lg-end">
            <a href="../auth/logout.php" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin Keluar dari Akun?')"><i class="bi bi-door-open"></i> Logout</a>
          </div>
        </div>
      </div>
    </nav>
  </div>