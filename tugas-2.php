<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body style="background-color: #41C9E2;">
    <div class="container">
        <div class="row px-5 py-5 mx-auto my-auto">
            <h1 class="display-3 text-dark fw-bold text-center mb-2">TUGAS PHP 2</h1>
            <hr class="mb-4 border-dark">
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h1 class="display-3 fw-bold text-center border-bottom mb-2">Form Belanja</h1>
                        <form action="tugas-2.php" name="formBelanja" method="POST">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Pelanggan</label>
                                <input type="text" class="form-control" id="nama" name="customer" placeholder="Nama Pelanggan">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Jumlah Beli</label>
                                <select name="produk" id="produk" class="form-control">
                                    <option value="" selected disabled>--- Pilih Produk ---</option>
                                    <?php
                                    $listProduk = array('TV', 'KULKAS', 'MESIN CUCI', 'AC');
                                    foreach ($listProduk as $produk) {
                                        echo "<option value='$produk'>$produk</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Jumlah Beli</label>
                                <input type="text" class="form-control" id="jmlhBeli" name="jumlahBeli" placeholder="Jumlah Beli">
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <button type="reset" class="btn btn-outline-danger rounded"><i class="bi bi-arrow-repeat"></i>&nbsp;&nbsp;Reset</button>
                                <button type="submit" name="getData" class="btn btn-primary rounded">
                                    <i class='bi bi-check2-circle'></i>&nbsp;&nbsp;Simpan
                                </button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h1 class="display-3 fw-bold text-center border-bottom mb-2">Data Belanja</h1>
                        <?php
                        if (isset($_POST['getData'])) {
                            $customer = isset($_POST['customer']) ? $_POST["customer"] : "";
                            $produk = isset($_POST['produk']) ? $_POST['produk'] : "";
                            $jmlhBeli = isset($_POST['jumlahBeli']) ? $_POST['jumlahBeli'] : 0;

                            // Tetapkan Harga
                            if ($produk === 'TV') {
                                $harga = 12000000;
                            } else if ($produk === 'KULKAS') {
                                $harga = 17000000;
                            } else if ($produk === 'MESIN CUCI') {
                                $harga = 8000000;
                            } else if ($produk === 'AC') {
                                $harga = 5000000;
                            } else {
                                $harga = 0;
                            }

                            // Total Belanja
                            $totalBelanja = $jmlhBeli * $harga;

                            // Diskon
                            $hargaDiskon = 0.2 * $totalBelanja;

                            // ppn
                            $ppn = 0.1 * ($totalBelanja - $hargaDiskon);

                            // Harga Bersih
                            $hargaBersih = ($totalBelanja - $hargaDiskon) + $ppn;

                            echo "<ul class='list-group list-group-flush'>";
                            echo "<li class='list-group-item d-flex justify-content-between'>
                                    <p class='text-dark'>Nama Pelanggan</p>
                                    <p class='text-dark'>$customer</p>
                                    </li>";
                            echo "<li class='list-group-item d-flex justify-content-between'>
                                    <p class='text-dark'>Nama Produk</p>
                                    <p class='text-dark'>$produk</p>
                                    </li>";
                            echo "<li class='list-group-item d-flex justify-content-between'>
                                    <p class='text-dark'>Jumlah Beli</p>
                                    <p class='text-dark'>$jmlhBeli</p>
                                    </li>";
                            echo "<li class='list-group-item d-flex justify-content-between'>
                                    <p class='text-dark'>Harga Satuan</p>
                                    <p class='text-dark'>Rp. " . number_format($harga) . "</p>
                                    </li>";
                            echo "<li class='list-group-item d-flex justify-content-between'>
                                    <p class='text-dark'>Total Belanja</p>
                                    <p class='text-dark'>Rp. " . number_format($totalBelanja) . "</p>
                                    </li>";
                            echo "<li class='list-group-item d-flex justify-content-between'>
                                    <p class='text-dark'>Harga Diskon</p>
                                    <p class='text-dark'>Rp. " . number_format($hargaDiskon) . "</p>
                                    </li>";
                            echo "<li class='list-group-item d-flex justify-content-between'>
                                    <p class='text-dark'>PPN</p>
                                    <p class='text-dark'>Rp. " . number_format($ppn) . "</p>
                                    </li>";
                            echo "<li class='list-group-item d-flex justify-content-between'>
                                    <p class='text-dark'>Total Bayar (Harga Bersih)</p>
                                    <p class='text-dark'>Rp. " . number_format($hargaBersih) . "</p>
                                    </li>";

                            echo "</ul>";

                            // button hapus data
                            echo "<form action='' method='POST'>";
                            echo "<button type='submit' name='deleteData' class='btn btn-danger'><i class='bi       bi-trash'></i>&nbsp;&nbsp;Hapus Data</button>";
                            echo "</form>";
                        } else if (isset($_POST['deleteData'])) {
                            $customer = "";
                            $produk = "";
                            $jmlhBeli = 0;
                            $harga = 0;
                            $totalBelanja = 0;
                            $hargaDiskon = 0;
                            $ppn = 0;
                            $hargaBersih = 0;

                            echo "<p class='text-center text-white bg-success rounded'>Data Belanja berhasil dihapus</p>";
                        } else {
                            echo "<p class='text-center text-white bg-danger rounded'>Data Belanja Belum Ada</p>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS -->
    <script src=" https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>