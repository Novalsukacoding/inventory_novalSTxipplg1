<?php

$id_barang = $_GET['id_barang'];
$id_jenis = $_POST['id_jenis'];
$nama = $_POST['nama'];
$stok = $_POST['stok'];

include '../../config/koneksi.php';

$query=mysqli_query($conn, "UPDATE barang SET id_jenis='$id_jenis' , nama='$nama' , stok=$stok
WHERE id_barang='$id_barang'");

if($query){
    echo "<script>alert('data berhasil diedit')</script>";
    echo "<script>window.location.href='index.php'</script>";
}else{
    echo "<script>alert('data gagal diedit')</script>";
    echo "<script>window.location.href='view_tambah'</script>"; 
}