<?php
    include "../koneksi.php";
    
    if (isset($_GET['id_buah'])) {
        $id_buah = ($_GET["id_buah"]);
        
        $query = "SELECT * FROM buah WHERE id_buah='$id_buah'";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die ("Query Error: ".mysqli_errno($conn)." - ".mysqli_error($conn));
        }
        $data = mysqli_fetch_assoc($result);
        if (!count($data)) {
            echo "<script>alert('Data tidak ditemukan pada database');window.location='buah.php';</script>";
        }
    } else {
        echo "<script>alert('Masukkan data id_buah.');window.location='buah.php';</script>";
    }         
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buah</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <!-- Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
</head>
<body>
    <?php include ('../layout/navbar.php')?>
    <?php $buah = mysqli_query($conn, "SELECT * FROM buah");?>
    <div class="row">
        <div class="offset-md-1 col-md-7">
            <div class="container card shadow p-3 mb-3 rounded mt-3">
                <form action="proses_edit.php" method="POST" enctype="multipart/form-data">
                    <h3 class="mb-1">Edit Data Buah</h3><hr>
                        <div class="mb-1">
                            <label for="id_buah" class="col-form-label">ID Buah:</label>
                            <input type="text" class="form-control" name="id_buah" required value="<?= $data['id_buah']; ?>">
                        </div>
                        <div class="mb-1">
                            <label for="id_kategori" class="col-form-label">ID Kategori:</label>
                            <select name="id_kategori" id="" class="form-select mb-2" required>
                                <option value="">- Pilih -</option>
                                <?php
                                    $data_kategori = mysqli_query($conn, "SELECT * FROM kategori") or die (mysqli_error($conn));
                                    while($kategori = mysqli_fetch_array($data_kategori)) {
                                        if ($kategori['id_kategori']==$kategori['id_kategori']){
                                            $selected= "selected";
                                        } else {
                                            $selected='';
                                        }
                                        echo "<option value=$kategori[id_kategori] $selected > $kategori[nama_kategori]</option>";
                                    } 
                                ?>
                            </select>
                        </div>
                        <div class="mb-1">
                            <label for="id_supplier" class="col-form-label">ID Supplier:</label>
                            <select name="id_supplier" id="" class="form-select mb-2" required>
                                <option value="">- Pilih -</option>
                                <?php
                                    $data_supplier = mysqli_query($conn, "SELECT * FROM supplier") or die (mysqli_error($conn));
                                    while($supplier = mysqli_fetch_array($data_supplier)) {
                                        if ($supplier['id_supplier']==$supplier['id_supplier']){
                                            $selected= "selected";
                                        } else {
                                            $selected='';
                                        }
                                        echo "<option value=$supplier[id_supplier] $selected > $supplier[nama_supplier]</option>";
                                    } 
                                ?>
                            </select>
                        </div>
                        <div class="mb-1">
                            <label for="nama_buah" class="col-form-label">Nama Buah:</label>
                            <input type="text" class="form-control" name="nama_buah" required value="<?= $data['nama_buah']; ?>">
                        </div>
                        <div class="mb-1">
                            <label for="harga" class="col-form-label">Harga:</label>
                            <input type="number" class="form-control" name="harga" required value="<?= $data['harga']; ?>">
                        </div>
                        <div class="mb-1">
                            <label for="stok" class="col-form-label">Stok:</label>
                            <input type="number" class="form-control" name="stok" required value="<?= $data['stok']; ?>">                   
                        </div>
                    </div>
                </div>
            <div class="col-md-3">
                <div class="container card shadow p-3 mb-3 rounded mt-3">
                    <h3 class="mb-1"></h3>
                        <div class="mb-1">
                            <label for="gambar" class="col-form-label" required>Gambar:</label>
                            <p align="center">
                                <img src="../img/katalog/<?= $data['gambar']; ?>" style="width: 80px; float:center; margin-bottom: 5px;">
                            </p>
                            <input type="file" class="form-control" id="gambar" name="gambar"/>
                            <i style="float: left;font-size: 11px;color: red">Abaikan jika tidak merubah gambar produk</i>
                        </div>
                        <div class="mb-1">
                            <label for="deskripsi" class="col-form-label">Deskripsi:</label>
                            <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" required><?= $data['deskripsi']; ?></textarea>                    
                        </div>
                        <div class="mb-1">
                            <a href="buah.php" type="button" class="btn btn-secondary mt-2">Batal</a>
                            <button type="submit" class="btn btn-primary mt-2">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>