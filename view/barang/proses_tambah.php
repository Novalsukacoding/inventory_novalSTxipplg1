<?php

$id_barang = $_POST['id_barang'];
$id_jenis = $_POST['id_jenis'];
$nama = $_POST['nama'];
$stok = $_POST['stok'];

include '../../config/koneksi.php';
$query = mysqli_query($conn,
"INSERT INTO barang VALUES('$id_barang','$id_jenis','$nama','$stok')");

echo "
<script>
alert('input data berhasil');
</script>
<script>
window.location.href = 'index.php';
</script>";