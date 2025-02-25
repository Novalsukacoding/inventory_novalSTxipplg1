<?php

$id_jenis = $_POST['id_jenis'];
$nama = $_POST['nama'];

include '../../config/koneksi.php';

$query=mysqli_query($conn, "UPDATE jenis SET nama='$nama'
WHERE id_jenis='$id_jenis'");

if($query){
    echo "<script>alert('data berhasil diedit')</script>";
    echo "<script>window.location.href='index.php'</script>";
}else{
    echo "<script>alert('data gagal diedit')</script>";
    echo "<script>window.location.href='view_tambah'</script>"; 
}