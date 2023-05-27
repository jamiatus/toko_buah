<?php
include "../koneksi.php";
// Start proses tambah data
if (isset($_POST['simpan'])) {
    $simpan = mysqli_query($conn, "INSERT INTO supplier (id_supplier, nama_supplier, telp_supplier, alamat_supplier) VALUES ('$_POST[id_supplier]','$_POST[nama_supplier]','$_POST[telp_supplier]','$_POST[alamat_supplier]') ");

    if ($simpan){
        echo "<script>alert('Data baru berhasil ditambahkan');window.location='supplier.php';</script>";
    }else {
        echo "<script>alert('Gagal menambahkan data baru');window.location='supplier.php';</script>";
    }
}
// End proses tambah data

// Start proses ubah data
if (isset($_POST['ubah'])) {
    $ubah = mysqli_query($conn, "UPDATE supplier SET id_supplier='$_POST[id_supplier]', nama_supplier='$_POST[nama_supplier]', telp_supplier='$_POST[telp_supplier]', alamat_supplier='$_POST[alamat_supplier]' WHERE id_supplier = '$_POST[id_supplier]'");

    if ($ubah){
        echo "<script>alert('Data berhasil diubah.');window.location='supplier.php';</script>";
    }else {
        echo "<script>alert('Gagal mengubah data');window.location='supplier.php';</script>";
    }
}
// End proses ubah data