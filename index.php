<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <!-- Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <!-- Start Navbar -->
    <nav class="navbar-expand-lg sticky-top fw-bolder text-light py-2 navb">
        <div class="d-flex">
            <div class="p-2 ps-5">
                <a href="#"><img src="img/logo3.png" alt="" class="logo" width="75px"></a>
            </div>
            <div class="p-2 px-4 ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Beranda</a>
                </li>
            </div>
            <div class="p-2 px-4">
                <li class="nav-item">
                    <a class="nav-link" href="buah/buah.php">Data Buah</a>
                </li>
            </div>
            <div class="p-2 px-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Data Lain</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="kategori/kategori.php">Kategori</a></li>
                        <li><a class="dropdown-item" href="supplier/supplier.php">Supplier</a></li>
                    </ul>
                </li>
            </div>
            <div class="p-2 px-4 pe-5">
                <li class="nav-item">
                    <a class="nav-link" href="about/about.php">Tentang Kami</a>
                </li>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <!-- Start Header -->
    <section>
        <div class="circle"></div>
        <div class="content">
            <div class="textBox">
                <h2>Beli Buah Segar <br>di <span>Fruit Home</span></h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus soluta dolorem saepe minima, inventore animi dignissimos aliquid natus at itaque, consectetur, fugiat eius nam facilis placeat maxime laudantium mollitia sit.</p>
                <a href="about/about.php">Selengkapnya</a>
            </div>
            <div class="imgBox">
                <img src="img/buah1.png" class="buah">
            </div>
        </div>
            <ul class="thumb">
                <li><img src="img/th1.png" onclick="imgSlider('img/buah1.png')"></li>
                <li><img src="img/th2.png" onclick="imgSlider('img/buah2.png')"></li>
                <li><img src="img/th3.png" onclick="imgSlider('img/buah3.png')"></li>
            </ul>
    </section>
    <!-- End Header -->
    <!-- Start Product -->
    <div class="container">
        <div class="list-buah">
            <h2>Produk Kami</h2>
        </div>
        <div class="row pt-5">
            <?php include "koneksi.php";?>
            <?php $buah = mysqli_query($conn, "SELECT * FROM buah"); ?>
            <?php while($data_buah = mysqli_fetch_assoc($buah)){?>
                <div class="col-md-3 pt-3">
                    <div class="card shadow-sm" style="width: 100%; background:#C8E6C9;">
                        <div class="img-container">
                            <img src="img/katalog/<?= $data_buah["gambar"]; ?>" class="card-img-top" alt="...">
                            <div class="overlay">
                                <a href="buah/detail_buah.php?id_buah=<?= $data_buah["id_buah"]; ?>" class="btn btn-outline-secondary btn-sm">
                                    <i class="fa-solid fa-circle-info"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <input type="hidden" value="<?= $data_buah["id_buah"]; ?>"></input>
                            <h5 class="card-title"><?= $data_buah["nama_buah"]; ?></h5>
                            <p class="card-text">Rp. <?= number_format ($data_buah["harga"], 0,',','.')?>,00</p>
                            <!-- <a href="#" class="btn btn-primary">Detail Produk</a> -->
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
    <!-- End Product -->
    <!-- Start Footer -->
    <footer class="page-footer">
        <div class="medsos">
            <a href="#"><i class="fa-brands fa-square-facebook fa-xl"></i></a>
            <a href="#"><i class="fa-brands fa-square-instagram fa-xl"></i></a>
            <a href="#"><i class="fa-brands fa-square-twitter fa-xl"></i></a>
        </div>
        <p class="mb-0">&copy 2023 Copyright: Fruit Home - Jamiatus Sholihah</p>
    </footer>
    <!-- End Footer -->
</body>
</html>
<script type="text/javascript">
    function imgSlider(anything){
        document.querySelector('.buah').src = anything;
    }
</script>