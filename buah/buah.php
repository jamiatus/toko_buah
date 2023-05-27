<?php include "../koneksi.php";?>
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
    <!-- Navbar -->
    <?php include ('../layout/navbar.php')?>
    <!-- Start Content -->
    <?php $buah = mysqli_query($conn, "SELECT * FROM buah ORDER BY id_buah ASC");?>
    <div class="container card shadow p-3 mb-3 rounded mt-3">
        <div class="row px-3">
            <div class="col card-header py-3 ps-4 fw-bold fs-4">Data Kategori</div>
            <div class="col card-header py-3 ps-4 text-right pe-4">
                <a href="tambah.php" type="button" class="btn btn-success" style="float:right;">
                    <i class="fa-solid fa-plus"></i>&nbsp;Tambah
                </a>
            </div>
        </div>
        <div class="container px-1 mt-3 mb-3">
            <table id="katTable" class="display">
                <thead>
                    <th>ID Buah</th>
                    <th>ID Kategori</th>
                    <th>ID Supplier</th>
                    <th>Nama buah</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    <?php while($data_buah = mysqli_fetch_assoc($buah)){?>
                    <tr>
                        <td><?= $data_buah["id_buah"]; ?></td>
                        <td><?= $data_buah["id_kategori"]; ?></td>
                        <td><?= $data_buah["id_supplier"]; ?></td>
                        <td><?= $data_buah["nama_buah"]; ?></td>
                        <td><?= $data_buah["deskripsi"]; ?></td>
                        <td><img style="width: 80px;" src="../img/katalog/<?= $data_buah["gambar"]; ?>"></td>
                        <td><?= number_format ($data_buah["harga"], 0,',','.'); ?></td>
                        <td><?= $data_buah["stok"]; ?></td>
                        <td>
                            <a href="edit.php?id_buah=<?= $data_buah['id_buah']; ?>" class="btn btn-sm bg-primary text-white"><i class="fa-solid fa-pen-to-square fa-lg"></i> Ubah</a>
                            <a href="proses_delete.php?id_buah=<?= $data_buah['id_buah']; ?>" class="btn btn-sm bg-danger text-white" onclick="return confirm('Apakah yakin ini dihapus?')"><i class="fa-solid fa-trash-can fa-lg"></i> Hapus</a>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End Content -->
    <!-- Footer -->
    <?php include ('../layout/footer.php')?>
</body>
</html>
<!-- Datatable -->
<script type="text/javascript">
    $(document).ready( function () {
        $('#katTable').DataTable();
    } );
</script>