<?php include "../koneksi.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buah</title>
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
    <?php
        $id_buah=$_GET['id_buah'];
        $buah = mysqli_query($conn, "SELECT * FROM buah WHERE id_buah = '$id_buah' ");
        $data_buah = mysqli_fetch_assoc($buah);
        $join = mysqli_query($conn, "SELECT * FROM buah JOIN kategori ON buah.id_kategori=kategori.id_kategori WHERE id_buah = '$id_buah'");
        $kat = mysqli_fetch_assoc($join);
    ?>
    <!-- Navbar -->
    <?php include ('../layout/navbar.php')?>
    <!-- Start Content -->
    <div class="container card mt-5 p-0 shadow">
        <h5 class="card-header py-3 ps-5 fw-bold fs-4">Detail Produk</h5>
        <div class="card-body">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="../img/katalog/<?= $data_buah["gambar"]; ?>" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="offset-sm-1 col">
                    <div class="card-body">
                        <h5 class="card-title fs-3">
                            <?= $data_buah["nama_buah"] ?> - <?= $kat["nama_kategori"];?>
                        </h5>
                        <p class="card-text pe-5" align="justify"><?= $data_buah["deskripsi"]; ?></p>
                        <p class="card-text fs-5 pe-5" align="justify">Harga: Rp. <?= number_format ($data_buah["harga"], 0,',','.'); ?>,00 <br>Stok: <?= $data_buah["stok"]; ?></p>
                        <a href="../index.php" class="btn btn-danger">Kembali</a>
                        <a href="http://wa.me/6285000000000" target="blank" class="btn btn-success"><i class="fa-brands fa-whatsapp"></i> Beli Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->
    <!-- Footer -->
    <?php include ('../layout/footer.php')?>
</body>
</html>