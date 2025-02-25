<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
</head>
<body>
    <div class="container">
    <h1>Halaman Edit</h1> <br>
    <?php 
    include '../../config/koneksi.php';
    $id_barang=$_GET['id_barang'];
    $query=mysqli_query($conn,"SELECT * FROM barang WHERE id_barang='$id_barang'");
    $result=mysqli_fetch_array($query);?>
    <form action="proses_edit.php?id_barang=<?php echo $result['id_barang']?>" method="post">
        <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">ID Barang</span>
  <input type="number" class="form-control" placeholder="1" aria-label="Username" aria-describedby="basic-addon1" name="id_barang">
</div>
        <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">ID jenis</span>
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
        <button type="submit" class="btn btn-primary">simpan</button>
    </form>
    </div>
    
</body>
</html>