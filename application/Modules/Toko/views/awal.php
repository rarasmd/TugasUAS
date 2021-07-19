<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raski Pet Shop</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/b8176260d8.js" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <h2><a class="navbar-brand" href="#">Raski Pet Shop</a></h2>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('toko/toko/kontak'); ?>" tabindex="-1" aria-disabled="true">Kontak</a>
                </li>
            </ul>
            <style>
                .icon {
                    color: #fff;
                }
            </style>
            <?php if ($user) { ?>
                <a href="<?= base_url('toko/toko/keranjang'); ?>">
                    <i class="icon fas fa-shopping-cart"></i>
                    <span class="badge badge-success ml-2"><?= $jml['jumlah']; ?></span>
                </a>
                <a href="<?= base_url('toko/toko/logout'); ?>">
                    <i class="icon fas fa-sign-out-alt ml-4"></i>
                </a>

            <!-- icon masuk -->
            <?php } else { ?>
                <a id="sigin" data-toggle="modal" data-target="#exampleModal">
                    <i class="icon fas fa-user mr-4"></i>
                </a>
            <?php } ?>
            <!-- /icon masuk -->

        </div>
    </nav>

            <img src="assets/img/bg.jpg" height="610px" width="1343px;">

    <div class="container">
        <div class="row mt-5">
            <div class="col pb-6">
                <h2 class="text-center">Semua Menu Raski Pet Shop</h2>
            </div>
        </div>
        <div class="row mt-3">
            <?php
            foreach ($produk as $m) {
            ?>
                <!-- card mulai -->
                <div class="col-md-3 pb-4">
                    <div class="card">
                        <img src="assets/img/<?php echo $m['gambar'] ?>" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $m['nama_produk'] ?></h5>
                            <span class="card-text">Jml Stok :
                                <span class="badge badge-pill"><?php echo $m['stok'] ?></span> </span>
                            <p class="card-text">Rp <?php echo $m['harga'] ?></p>
                            <?php if ($user) { ?>
                                <a href="<?= base_url("toko/toko/tambah/") . $m['id_produk'] ?>" id="beli" class="btn btn-primary">Beli</a>
                            <?php } else { ?>
                                <button id="logindulu" class="btn btn-primary">Beli</button>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <!-- card selesai -->
            <?php
            } ?>
        </div>

    </div>
    <footer>
        <div class="col text-center">
            <i class="fa fa-copyright" aria-hidden="true">Copyright by Raras MD, 2021</i>
        </div>
    </footer>


    <!-- bagian login -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Halaman Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= form_open('toko/toko/login') ?>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="password" class="form-control" id="pass" name="password">
                    </div>
                    <div class="mt-3">
                        <h6>Belum punya akun ? 
                            <a id="sigin" data-toggle="modal" data-target="#exampleModal">Daftar</a></h6>
                    </div>
                    </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- bagian daftar -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Halaman Daftar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= form_open('toko/toko/daftar') ?>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="password" class="form-control" id="pass" name="password">
                    </div>
                    <div class="mt-3">
                        <h6>Sudah punya akun ? 
                            <a href="id="sigin" data-toggle="modal" data-target="#exampleModal"">Login</a></h6>
                    </div>
                    </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Daftar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>

<script src="assets/css/jquery-3.5.1.min.js"></script>
<script src="assets/css/bootstrap.min.js"></script>
<script>
    $('#logindulu').on('click', function() {
        Swal.fire(
            'Gagal !!',
            'Login Terlebih Dahulu',
            'warning'
        );
    });
</script>
<script>
    if (<?= $this->session->flashdata('message') == "berhasil" ?>) {
        Swal.fire(
            'Sukses!!',
            'Produk berhasil ditambahkan',
            'success'
        );
    }
</script>
</html>