<?php
    
    include ('../koneksi.php');

    $id_supplier = $_GET['id_supplier'];

    $result = mysqli_query($conn, "DELETE FROM supplier WHERE id_supplier='$id_supplier'");

    header("Location:supplier.php");
?>