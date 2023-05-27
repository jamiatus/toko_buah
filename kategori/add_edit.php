<?php
include "../koneksi.php";
// Start proses tambah data
if (isset($_POST['simpan'])) {
    $simpan = mysqli_query($conn, "INSERT INTO kategori (id_kategori, nama_kategori) VALUES ('$_POST[id_kategori]','$_POST[nama_kategori]') ");

    if ($simpan){
        echo "<script>alert('Data baru berhasil ditambahkan');window.location='kategori.php';</script>";
    }else {
        echo "<script>alert('Gagal menambahkan data baru');window.location='kategori.php';</script>";
    }
}
// End proses tambah data

// Start proses Edit data
if (isset($_POST['ubah'])) {
    $ubah = mysqli_query($conn, "UPDATE kategori SET id_kategori='$_POST[id_kategori]', nama_kategori='$_POST[nama_kategori]' WHERE id_kategori = '$_POST[id_kategori]'");

    if ($ubah){
        echo "<script>alert('Data berhasil diubah.');window.location='kategori.php';</script>";
    }else {
        echo "<script>alert('Gagal mengubah data');window.location='kategori.php';</script>";
    }
}
// End proses Edit data
