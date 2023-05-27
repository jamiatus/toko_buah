<?php
    include ('../koneksi.php');

    $id_buah       = $_POST['id_buah'];
    $id_kategori   = $_POST['id_kategori'];
    $id_supplier   = $_POST['id_supplier'];
    $nama_buah     = $_POST['nama_buah'];
    $harga         = $_POST['harga'];
    $stok          = $_POST['stok'];
    $deskripsi     = $_POST['deskripsi'];
    $gambar        = $_FILES['gambar']['name'];
    
    if($gambar != "") {
        $ekstensi_diperbolehkan = array('png','jpg');
        $x = explode('.', $gambar);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['gambar']['tmp_name'];   
        $angka_acak     = rand(1,999);
        $nama_gambar_baru = $angka_acak.'-'.$gambar;      
        
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
            move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru);
            $query = "UPDATE buah SET id_buah='$id_buah',id_kategori='$id_kategori',id_supplier='$id_supplier',nama_buah='$nama_buah',harga='$harga', stok='$stok',deskripsi='$deskripsi',gambar='$nama_gambar_baru'";
            $query .= "WHERE id_buah = '$id_buah'";
            $result = mysqli_query($conn, $query);

            if(!$result){
                die ("Query gagal dijalankan: ".mysqli_errno($conn)." - ".mysqli_error($conn));
            } else {
                echo "<script>alert('Data berhasil diubah.');window.location='buah.php';</script>";
            }
        } else {     
            echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tambah.php';</script>";
        }

    } else {
        $query = "UPDATE buah SET id_buah='$id_buah',id_kategori='$id_kategori',id_supplier='$id_supplier',nama_buah='$nama_buah',harga='$harga',stok='$stok',deskripsi='$deskripsi'";
        $query .= "WHERE id_buah = '$id_buah'";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($conn)." - ".mysqli_error($conn));
        } else {
            echo "<script>alert('Data berhasil diubah.');window.location='buah.php';</script>";
        }
    }