<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
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
</head>
<body>
    <!-- Navbar -->
    <?php include ('../layout/navbar.php')?>
    <!-- Start Header -->
    <header>
        <div class="banner">
			<img src="../img/tentang.jpg" alt="">
			<div class="banner-text">
				<h1>Tentang Fruit Home</h1>
			</div>
		</div>
	</header>
    <!-- End Header -->
    <!-- Start Content -->
    <div class="container">
        <div class="row py-5">
            <div class="offset-md-1 col-md-7">
                <h3>TENTANG KAMI<hr width="200" align="left"></h3>
                <p align="justify">
                    Fruit Home didirikan pada tahun 1999, berawal dari satu cabang berlokasi di Sampang. Bermulakan hanya dengan 15 pegawai, kami mempunyai mimpi untuk menyediakan buah berkualitas bagi masyarakat sekitar dengan harga terjangkau. Dengan dedikasi kami terhadap kualitas dan pelayanan terhadap pelanggan, Fruit Home telah berkembang pesat. Saat ini Fruit Home mampu melayani pelanggan di berbagai lokasi di Madura dan sekitarnya.
                </p>
            </div>
            <div class="col-md-3 ps-5 pt-5 mt-3">
                <img src="../img/logo.png" title="" width="100%"><br>
            </div>
        </div>
        <div class="row bg-color:#">
            <div class="offset-md-1 col-md-11 pt-3">
                <h3>KONTAK KAMI<hr width="200" align="left"></h3>
            </div>
            <div class="offset-md-1 col-md-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63353.33595750337!2d113.1583108775755!3d-7.0581262761172345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd787b870891d91%3A0x9e78aac789e906db!2sISTANA%20BUAH!5e0!3m2!1sid!2sid!4v1684905308315!5m2!1sid!2sid" width="100%" height="80%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <a href="http://wa.me/6285000000000" target="blank" style="text-decoration: none;"><i class="fa-brands fa-whatsapp"></i></i> (+62) 85000000000</a><br>
                <a href="#" style="text-decoration: none;"><i class="fa-sharp fa-regular fa-envelope"></i> fruithome@gmail.com</a>
            </div>
            <div class="col-md-5 ms-5">
                <div class="card" style="background-color: #bbe2c6;">
                    <form action="">
                        <h3 class="mb-3 pt-3 px-3">Kirim Pesan</h3>
                        <div class="mb-1 px-3">
                            <label for="nama_pengirim" class="col-form-label">Nama Pengirim:</label>
                            <input type="text" class="form-control" id="nama_pengirim">
                        </div>
                        <div class="mb-1 px-3">
                            <label for="pesan" class="col-form-label">Pesan:</label>
                            <textarea type="text" class="form-control" id="pesan"></textarea>                    
                        </div>
                        <div class="mb-1 px-3 pb-2">
                            <button type="submit" class="btn btn-success mt-2">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->
    <!-- Start Footer -->
    <div class="in-foot">
        <footer class="page-footer">
            <div class="medsos">
                <a href="https://www.facebook.com/"><i class="fa-brands fa-square-facebook fa-xl"></i></a>
                <a href="https://www.instagram.com/"><i class="fa-brands fa-square-instagram fa-xl"></i></a>
                <a href="https://twitter.com/"><i class="fa-brands fa-square-twitter fa-xl"></i></a>
            </div>
            <p class="mb-0">&copy 2023 Copyright: Fruit Home - Jamiatus Sholihah</p>
        </footer>
    </div>
    <!-- End Footer -->
</body>
</html>