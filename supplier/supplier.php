<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supplier</title>
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
        include "../koneksi.php";
        $supplier = mysqli_query($conn, "SELECT * FROM supplier");
    ?>
    <!-- Navbar -->
    <?php include ('../layout/navbar.php')?>
    <!-- Start Table Data upplier -->
    <div class="container card shadow p-3 mb-3 rounded mt-3">
        <div class="row px-3">
            <div class="col card-header py-3 ps-4 fw-bold fs-4">Data Supplier</div>
            <div class="col card-header py-3 ps-4 text-right pe-4">
                <button type="button" class="btn btn-success" style="float:right;"data-bs-toggle="modal" data-bs-target="#modalTambah">
                    <i class="fa-solid fa-plus"></i>&nbsp;Tambah
                </button>
            </div>
        </div>
        <div class="container px-1 mt-3 mb-3">
            <table id="supTable" class="display">
                <thead>
                    <th>ID</th>
                    <th>Nama Supplier</th>
                    <th>No Telepon</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                <?php 
                $supplier = mysqli_query($conn,"SELECT * FROM supplier");
                while ($data = mysqli_fetch_array($supplier)):
                ?>
                    <td><?= $data["id_supplier"];?></td>
                    <td><?= $data["nama_supplier"];?></td>
                    <td><?= $data["telp_supplier"];?></td>
                    <td><?= $data["alamat_supplier"];?></td>
                    <td>
                        <a href="" class="btn btn-sm bg-primary text-white" data-bs-toggle="modal" data-bs-target="#modalEdit<?= $data['id_supplier'] ?>"><i class="fa-solid fa-pen-to-square fa-lg"></i> Ubah</a>
                        <a href="proses_delete.php?id_supplier=<?php echo $data['id_supplier']; ?>" onclick="return confirm('Apakah yakin ini dihapus?')"  class="btn btn-sm btn-danger"><i class="fa-solid fa-trash-can fa-lg"></i> Hapus</a>
                    </td>
                    <!-- End Table Data upplier -->
                    <!-- Start Modal Edit -->
                    <div class="modal fade" id="modalEdit<?=$data["id_supplier"]?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalEditLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="modalEditLabel">Edit Data Supplier</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="add_edit.php" method="POST">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label class="form-label">ID Supplier</label>
                                            <input type="text" class="form-control" name="id_supplier" value="<?= $data["id_supplier"];?>" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Nama Supplier</label>
                                            <input type="text" class="form-control" name="nama_supplier" value="<?= $data["nama_supplier"];?>" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">No Telepon</label>
                                            <input type="text" class="form-control" name="telp_supplier" value="<?= $data["telp_supplier"];?>" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Alamat</label>
                                            <textarea type="text" class="form-control" name="alamat_supplier" required><?= $data["alamat_supplier"];?></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" name="ubah" class="btn btn-primary">Ubah</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End Modal Edit -->
                </tr>
                <?php endwhile;?>
                </tbody>
            </table>
        </div>
        <!-- Start Modal Tambah-->
        <div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modalTambahLabel">Tambah Data Supplier</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="add_edit.php" method="POST">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">ID Supplier</label>
                                <input type="text" class="form-control" name="id_supplier" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Supplier</label>
                                <input type="text" class="form-control" name="nama_supplier" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">No Telepon</label>
                                <input type="text" class="form-control" name="telp_supplier" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Alamat Supplier</label>
                                <textarea type="text" class="form-control" name="alamat_supplier" required></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Tambah-->
    <!-- Footer -->
    <?php include ('../layout/footer.php')?>
</body>
</html>
<!-- Datatable -->
<script type="text/javascript">
    $(document).ready( function () {
        $('#supTable').DataTable();
    } );
</script>