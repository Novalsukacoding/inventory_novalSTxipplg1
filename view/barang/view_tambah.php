<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Everything Is There</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../barang/index.php">barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../jenis/index.php">jenis</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">About</a></li>
            <li><a class="dropdown-item" href="#">contact us</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    
</head>
<body>
    <div class="container">
    <h1>Halaman Tambah</h1>
    <form action="proses_tambah.php" method="post">
        <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">ID Barang</span>
  <input type="number" class="form-control" placeholder="1" aria-label="Username" aria-describedby="basic-addon1" name="id_barang">
</div>
        <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">ID Jenis</span>
  <input type="number" class="form-control" placeholder="1" aria-label="Username" aria-describedby="basic-addon1" name="id_jenis">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Nama</span>
  <input type="text" class="form-control" placeholder="masukan nama barang" aria-label="Username" aria-describedby="basic-addon1" name="nama">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Stok</span>
  <input type="number" class="form-control" placeholder="1" aria-label="Username" aria-describedby="basic-addon1" name="stok">
</div>
        <br>
        <button type="submit">simpan</button>
    </form>
    </div>
    
</body>
</html>