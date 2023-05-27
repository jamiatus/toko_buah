<?php
  include ('../koneksi.php');
    
    $id_buah = $_GET["id_buah"];
    
    $query = "DELETE FROM buah WHERE id_buah='$id_buah' ";
    $hasil_query = mysqli_query($conn, $query);

    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($conn).
       " - ".mysqli_error($conn));
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='buah.php';</script>";
    }