<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
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
          <a class="nav-link active" aria-current="page" href="#">barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">jenis</a>
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
<br>
    <div class="container">
         <h1>Data Jenis</h1>
         <a class="btn btn-primary" href="view_tambah.php" role="button">Tambah</a>
    <br><br/>
    <table class="table table-striped table-bordered ">
  <tr>
            <th>id_barang</th>
            <th>id_jenis</th>
            <th>nama</th>
            <th>stok</th>
            <th>aksi</th>
        </tr>
            <?php include '../../config/koneksi.php';
            $query = mysqli_query($conn,"SELECT * FROM barang");
            $no=1;
            if(mysqli_num_rows($query)){
                while($result=mysqli_fetch_assoc($query)){
                    ?>
                    <tr>
                        <td><?php echo $result['id_barang'];?></td>
                        <td><?php echo $result['id_jenis'];?></td>
                        <td><?php echo $result['nama'];?></td>
                        <td><?php echo $result['stok'];?></td>
                        <td>
                            <a href="<button type="button class="btn btn-danger"></button>Edit</a>
                            <a href="<button type="button class="btn btn-warning"></button>Hapus</a>
                        </td>
                </tr>
                <?php
            } $no++;
        }else{
            echo "Data kosong";
        }
        ?>
</table>
</div>
</body>
</html>