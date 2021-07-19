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
                    <a class="nav-link" href="<?= base_url('toko'); ?>" tabindex="-1" aria-disabled="true">Kontak</a>
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

    <footer>
        <div class="col text-center">
            <i class="fa fa-copyright" aria-hidden="true">Copyright by Raras MD, 2021</i>
        </div>
    </footer>
</html>