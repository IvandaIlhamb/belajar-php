<?php
$namaProduk = "Football Team Jersey";
$hargaProduk = "Rp. 5.000.000";
$deskripsiProduk = "Jersey original klub eropa";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <link rel="stylesheet" href="assets/dist/CSS/list-product.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class="judul">
        <h1>Daftar Produk Kami</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <img src="assets/dist/img/barca.png" alt="" class="card-image-top">
                    <div class="card-body">
                        <h5 class="card-titel text-center"><?php echo $namaProduk;?></h5>
                        <p class="card-text text-center"><?php echo $deskripsiProduk;?></p>
                        <h6 class="text-center"><?php echo $hargaProduk;?></h6>
                        <div class="star text-center">
                            <i class="fa fa-star checked"></i>
                            <i class="fa fa-star checked"></i>
                            <i class="fa fa-star checked"></i>
                            <i class="fa fa-star checked"></i>
                            <i class="fa fa-star checked"></i>
                        </div>
                        <div class="btn">
                            <button type="button">Tambah</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="assets/dist/img/barca.png" alt="" class="card-image-top">
                    <div class="card-body">
                        <h5 class="card-titel text-center"><?php echo $namaProduk;?></h5>
                        <p class="card-text text-center"><?php echo $deskripsiProduk;?></p>
                        <h6 class="text-center"><?php echo $hargaProduk;?></h6>
                        <div class="star text-center">
                            <i class="fa fa-star checked"></i>
                            <i class="fa fa-star checked"></i>
                            <i class="fa fa-star checked"></i>
                            <i class="fa fa-star checked"></i>
                            <i class="fa fa-star "></i>
                        </div>
                        <div class="btn">
                            <button type="button">Tambah</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="assets/dist/img/barca.png" alt="" class="card-image-top">
                    <div class="card-body">
                        <h5 class="card-titel text-center"><?php echo $namaProduk;?></h5>
                        <p class="card-text text-center"><?php echo $deskripsiProduk;?></p>
                        <h6 class="text-center"><?php echo $hargaProduk;?></h6>
                        <div class="star text-center">
                            <i class="fa fa-star checked"></i>
                            <i class="fa fa-star checked"></i>
                            <i class="fa fa-star checked"></i>
                            <i class="fa fa-star "></i>
                            <i class="fa fa-star "></i>
                        </div>
                        <div class="btn">
                            <button type="button">Tambah</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="assets/dist/img/barca.png" alt="" class="card-image-top">
                    <div class="card-body">
                        <h5 class="card-titel text-center"><?php echo $namaProduk;?></h5>
                        <p class="card-text text-center"><?php echo $deskripsiProduk;?></p>
                        <h6 class="text-center"><?php echo $hargaProduk;?></h6>
                        <div class="star text-center">
                            <i class="fa fa-star checked"></i>
                            <i class="fa fa-star checked"></i>
                            <i class="fa fa-star "></i>
                            <i class="fa fa-star "></i>
                            <i class="fa fa-star "></i>
                        </div>
                        <div class="btn">
                            <button type="button">Tambah</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>